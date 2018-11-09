<?php
//print_r($_REQUEST);
if($_REQUEST['category_name']){

	$target_dir = dirname(__FILE__)."/../../resource/image_category/";
	print_r($_FILES);exit;
	if(isset($_FILES["image_category"]['tmp_name'])) {
		$fileName = date('dmYHis').str_replace(" ", "",basename($_FILES["image_category"]["name"]));
		$target_file = $target_dir . $fileName;
		move_uploaded_file($_FILES["image_category"]["tmp_name"], $target_file);
	}
	if($_REQUEST['category_id']['tmp_name']){
		$data = $queryObj->qr("
		UPDATE category SET category_name = '".$_REQUEST['category_name']."', category_description = '".$_REQUEST['category_description']."', category_images = '".$fileName."' , parent_id = '".$_REQUEST['parent_id']."' 
		where category_id =".$_REQUEST['category_id']);
	}
	else{
		$data = $queryObj->qr("
		INSERT INTO category (category_name,category_description,category_create_date,parent_id,category_images ) 
		values ('".$_REQUEST['category_name']."','".$_REQUEST['category_description']."','".date('Y-m-d', time())."','".$_REQUEST['parent_id']."' ,'".$fileName."')");
	}
}
if($_REQUEST['category_id']){
	$category = $queryObj->queryDBFirst("SELECT * FROM category where category_id = ".$_REQUEST['category_id']);
}
//print_r($category);
$data = $queryObj->queryDB("SELECT * FROM category");
$listCategory = ''; 
if(is_array($data)){
	foreach ($data as $item) {

		$listCategory .= '
			<tr>
				<td>'.$item['category_id'].'</td>
				<td>'.$item['category_name'].'</td>
				<td>'.$item['category_description'].'</td>
				<td>'.$item['category_images'].'</td>
				<td>'.$item['category_create_date'].'</td>
				<td><a class="btn btn-primary" href="'.$urlBackEnd.'category/?category_id='.$item['category_id'].'">edit</a></td>
			</tr>
		';
		//if($item['cat_root']!=1) continue;
		if($_REQUEST['category_id'] == $item['category_id']) continue;
		$listCatSelect .= '<option '.$seelctEd.' value="'.$item['category_id'].'">'.$item['category_name'].'</option>';

	}

	if($_REQUEST['product_id']){
	$product = $queryObj->queryDBFirst("SELECT * FROM category where category_id = ".$_REQUEST['category_id']);
	$htmlImagesView = '<img class="img_product" src="'.$urlRoot.'resource/category_images/'.$product['category_images'].'">';


	$productImgList = $queryObj->queryDB("SELECT * FROM category_images where category_id = ".$_REQUEST['category_id']);
	$imghtmlList = '';
	if($productImgList){
		foreach ($productImgList as $key => $value) {
			$imghtmlList .= '<img class="img_product" src="'.$urlRoot.'resource/category_images/'.$value['images'].'">';
		}
	}

}
}
?>

		<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
		<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="<?php echo $urlBackEnd;?>category" method="POST" enctype="multipart/form-data">
										<input type="hidden" name="category_id" value="<?php echo $category['category_id'];?>">
										<div class="form-group">
										    <label for="exampleInputEmail1">category parent</label>
										    <select name="parent_id"  class="form-control">
										    	<option value="">Root</option>
										    	<?php echo $listCatSelect; ?>
										    </select>
									  	</div>
									  	<div class="form-group">
										    <label for="exampleInputEmail1">category name</label>
										    <input type="text" class="form-control"  placeholder="category" name="category_name" value="<?php echo $category['category_name'];?>">
									  	</div>
										<div class="form-group">
										    <label for="exampleInputPassword1">Category Name</label>
										    <textarea class="form-control" rows="3"  name="category_description"><?php echo $category['category_description'];?></textarea>
									  	</div>
									  	<div class="form-group">
								  			    <label for="exampleInputFile">Category images</label>
								  			    <input type="file" id="exampleInputFile" name="image_category">
								  			     <div id="div_images_show">
								  			    	<?php echo $htmlImagesView; echo $imghtmlList; ?>
								  			    </div>

								  			    <!-- <p class="help-block">Example block-level help text here.</p> -->
								  	</div>
									  	<button type="submit" class="btn btn-default">Submit</button>
									</form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
				                    <div class="panel panel-default">
				                        <div class="panel-heading">
				                            Basic Table
				                        </div>
				                        <!-- /.panel-heading -->
				                        <div class="panel-body">
				                            <div class="table-responsive">
				                                <table class="table">
				                                    <thead>
				                                        <tr>
				                                            <th>#ID</th>
															<th>Category Name</th>
															<th>Category Description</th>
															<th>Category Imgaes</th>
															<th>Create date</th>
															<th>Option</th>
				                                        </tr>
				                                    </thead>
				                                    <tbody>
				                                        <tr>
				                                            <td>1</td>
				                                            <td>Mark</td>
				                                            <td>Otto</td>
				                                            <td>@mdo</td>
				                                        </tr>
				                                        <?php echo $listCategory;?>
				                                    </tbody>
				                                </table>
				                            </div>
				                            <!-- /.table-responsive -->
				                        </div>
				                        <!-- /.panel-body -->
				                    </div>
				                    <!-- /.panel -->
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
