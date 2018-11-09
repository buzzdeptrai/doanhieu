<?php

/*if($_REQUEST['sample']){
	$data = $queryObj->queryDB("SELECT * FROM `product`;");
	foreach ($data as $key => $value) {
		$data = $queryObj->qr("
			UPDATE product SET product_url = '".$queryObj->slug($value['product_name'])."' where product_id =".$value['product_id']);
	}
}*/

if($_REQUEST['product_name']){

	$target_dir = dirname(__FILE__)."/../../resource/image_product/";
	
	//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	//echo $target_file;exit;
	//print_r($_FILES);exit();
	if(isset($_FILES["product_images"]['tmp_name'])) {
		$fileName = date('dmYHis').str_replace(" ", "",basename($_FILES["product_images"]["name"]));
		$target_file = $target_dir . $fileName;
		move_uploaded_file($_FILES["product_images"]["tmp_name"], $target_file);
	}

	if($_REQUEST['product_id']){
		if($_FILES["product_images"]['tmp_name']){
			$data = $queryObj->qr("
			UPDATE product SET product_name = '".$_REQUEST['product_name']."', product_description = '".$_REQUEST['product_description']."', product_category = '".$_REQUEST['product_category']."', product_images = '".$fileName."' ,product_price = '".$_REQUEST['product_price']."' , product_url = '".$queryObj->slug($_REQUEST['product_name'])."' where product_id =".$_REQUEST['product_id']);
		}
		else{
			$data = $queryObj->qr("
		UPDATE product SET product_name = '".$_REQUEST['product_name']."', product_description = '".$_REQUEST['product_description']."', product_category = '".$_REQUEST['product_category']."' ,product_price = '".$_REQUEST['product_price']."' , product_url = '".$queryObj->slug($_REQUEST['product_name'])."' where product_id =".$_REQUEST['product_id']);
		}
		$productIDAdd = $_REQUEST['product_id'];
	}
	else{
		$data = $queryObj->qr("
		INSERT INTO product (product_name,product_description,product_category,product_author,product_create_date,product_images,product_price,product_url) values ('".$_REQUEST['product_name']."','".$_REQUEST['product_description']."','".$_REQUEST['product_category']."','".$_SESSION['SS_ADMIN_ID']."','".date('Y-m-d', time())."','".$fileName."','".$_REQUEST['product_price']."','".$queryObj->slug($_REQUEST['product_name'])."')");
		$productIDAdd = $queryObj->getInsertId();
	}
	if(count($_FILES)>1){
		foreach ($_FILES as $key => $value) {
			if($key=='product_images') continue;

			$fileNameImg = date('dmYHis').str_replace(" ", "",basename($value["name"]));
			$target_file = $target_dir . $fileNameImg;
			move_uploaded_file($value["tmp_name"], $target_file);

			$data = $queryObj->qr("
			INSERT INTO product_imgaes (product_id,images) values ('".$productIDAdd."','".$fileNameImg."')");

		}
	}
	header('location:'.$urlBackEnd.'product');exit;
}

if($_REQUEST['product_id']){
	$product = $queryObj->queryDBFirst("SELECT * FROM product where product_id = ".$_REQUEST['product_id']);
	$htmlImagesView = '<img class="img_product" src="'.$urlRoot.'resource/image_product/'.$product['product_images'].'">';


	$productImgList = $queryObj->queryDB("SELECT * FROM product_imgaes where product_id = ".$_REQUEST['product_id']);
	$imghtmlList = '';
	if($productImgList){
		foreach ($productImgList as $key => $value) {
			$imghtmlList .= '<img class="img_product" src="'.$urlRoot.'resource/image_product/'.$value['images'].'">';
		}
	}

}

$dataCat = $queryObj->queryDB("SELECT * FROM category");
if(is_array($dataCat))
foreach ($dataCat as $value) {
	$seelctEd = $value['category_id'] == $product['product_category'] ? 'selected' : '';
	$listCatSelect .= '<option '.$seelctEd.' value="'.$value['category_id'].'">'.$value['category_name'].'</option>';
}

//get all product and buider page
$recordInPage = 5;
$page = $_REQUEST['page'] ? $_REQUEST['page'] : 1;
$limitQuery = ($page-1)*$recordInPage; 
$totalPro = $queryObj->queryDBFirst("SELECT count(*) as total FROM product ");
$totalProduct = $totalPro['total'];

if($limitQuery>$totalProduct || $page==1){
	$limitBegin = 0;
	$page = 1;
}
else{
	$limitBegin = $limitQuery;
}
if($totalProduct>$recordInPage){
	$maxPage = ceil($totalProduct/$recordInPage);
	$htmlPage = '<ul class="page"> ';
	if($page > 1){
		$htmlPage .= '<li><a class="link_page" href="'.$urlBackEnd.'product/?page='.($page-1).'">Prew</a></li>';
	}
	for ($i=1; $i <= $maxPage ; $i++) { 
		$activeClass = $i == $page ? 'active' : '';
		$htmlPage .= '<li class="'.$activeClass.'"><a class="link_page" href="'.$urlBackEnd.'product/?page='.$i.'">'.$i.'</a></li>';
	}	
	if($page <> $maxPage){
		$htmlPage .= '<li><a class="link_page" href="'.$urlBackEnd.'product/?page='.($page+1).'">Next</a></li>';
	}
	$htmlPage .= '</ul>';

}

$data = $queryObj->queryDB("SELECT * FROM product limit ".$limitBegin.",".$recordInPage);

$listAdmin = ''; 
if(is_array($data)){
	foreach ($data as $item) {
		$catFor = $queryObj->queryDBFirst("SELECT category_name FROM category where category_id = ".$item['product_category']);
		$listAdmin .= '
			<tr>
				<td>'.$item['product_id'].'</td>
				<td>'.$item['product_name'].'</td>
				<td><img class="img_product" src="'.$urlRoot.'resource/image_product/'.$item['product_images'].'"></td>
				<td>'.$item['product_price'].'</td>
				<td>'.$catFor['category_name'].'</td>
				<td>'.$item['product_create_date'].'</td>
				<td><a class="btn btn-primary" href="'.$urlBackEnd.'product/?product_id='.$item['product_id'].'">edit</a></td>
			</tr>
		';
	}
}
?>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">All Product</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="<?php echo $urlBackEnd;?>product" method="POST" enctype="multipart/form-data">
										<input type="hidden" name="product_id" value="<?php echo $product['product_id'];?>">

										<div class="form-group">
										    <label for="">product name</label>
										    <input type="text" class="form-control"  placeholder="" name="product_name" value="<?php echo $product['product_name'];?>">
									  	</div>
									  	<div class="form-group">
										    <label for="">product price</label>
										    <input type="text" class="form-control"  placeholder="" name="product_price" value="<?php echo $product['product_price'];?>">
									  	</div>
										<div class="form-group">
										    <label for="">product description</label>
										    <textarea name="product_description" id="editorProduct" class="ckeditor">
											    <?php echo $product['product_description'];?>
											</textarea>
									  	</div>
									  	<div class="form-group">
										    <label for="">product category</label>
										    <select name="product_category"  class="form-control">
										    	<?php echo $listCatSelect; ?>
										    </select>
									  	</div>
									  	<div class="form-group">
								  			    <label for="exampleInputFile">Product images</label>
								  			    <input type="file" id="exampleInputFile" name="product_images">
								  			    <div id="div_images_show">
								  			    	<?php echo $htmlImagesView; echo $imghtmlList; ?>
								  			    </div>
								  			    <div id="div_add_images">

								  			    </div>
								  			    <a id="add_images"> + add images</a>
								  			    <!-- <p class="help-block">Example block-level help text here.</p> -->
								  	</div>
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <!-- <button type="reset" class="btn btn-default">Reset Button</button> -->
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>





<h3>Product</h3>
<table class="table table-striped tab_product">
	<tbody>
		<tr>
			<th>#ID</th>
			<th>product name</th>
			<th>images</th>
			<th>product price</th>
			<th>product category</th>
			<th>Create date</th>
			<th>Option</th>
		</tr>
		<?php echo $listAdmin;?>
	</tbody>
</table>
<div>
	<?php echo $htmlPage;?>
	<div class="clear"></div>
</div>
<style type="text/css">
	.tab_product  tr >th,.tab_product  tr  td{
		vertical-align: inherit !important;
	}
	.img_product{
		width:100px;
	}
	.ck-editor__editable {
    	height: 250px;
	}
	.page li{
		list-style: none;
	    float: left;
	    border: 1px solid #3d9dc1;
	    margin: 5px;
	    padding: 3px 6px 3px 6px;
	}
	.page .active{
		background-color: #3d9dc1;
	}
	.page a:hover{
		text-decoration: none;
	}
	.page .active a{
		color: #fff;
	}
</style>
<script>


		


    ClassicEditor
        .create( document.querySelector( '#editorProduct' ) )
        .catch( error => {
            console.error( error );
        } 
    );
</script>