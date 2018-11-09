<?php
//print_r($_REQUEST);
if($_REQUEST['admin_username']){

	//print_r($_REQUEST);exit;

	if($_REQUEST['admin_id']){

		if($_REQUEST['per']){
			$queryObj->qr("DELETE  FROM admin_per WHERE admin_id =".$_REQUEST['admin_id']);
			foreach ($_REQUEST['per'] as $keyPer => $valuePer) {
				$view = $valuePer['view'] == 'on' ? 1 : 0;
				$add = $valuePer['add'] == 'on' ? 1 : 0;
				$update = $valuePer['update'] == 'on' ? 1 : 0;
				$delete = $valuePer['delete'] == 'on' ? 1 : 0;
				$queryObj->qr("
					INSERT INTO admin_per (admin_id,module,admin_per.`view`,admin_per.`add`,admin_per.`update`,admin_per.`delete`)
					values ('".$_REQUEST['admin_id']."','".$keyPer."','".$view."','".$add."','".$update."','".$delete."')"
				);
			}
		}
		if($_REQUEST['admin_password']){
			$data = $queryObj->qr("
				UPDATE admin SET admin_username = '".$_REQUEST['admin_username']."', admin_password = '".md5($_REQUEST['admin_password'])."', admin_email = '".$_REQUEST['admin_email']."' where admin_id =".$_REQUEST['admin_id']);
		}
		else{
			$data = $queryObj->qr("
			UPDATE admin SET admin_username = '".$_REQUEST['admin_username']."', admin_email = '".$_REQUEST['admin_email']."' where admin_id =".$_REQUEST['admin_id']);
		}
	}
	else{
		$data = $queryObj->qr("
		INSERT INTO admin (admin_username,admin_password,admin_email,admin_create_date) values ('".$_REQUEST['admin_username']."','".md5($_REQUEST['admin_password'])."','".$_REQUEST['admin_email']."','".date('Y-m-d', time())."')");
		$adminIDAdd = $queryObj->getInsertId();

		if($_REQUEST['per'] && $adminIDAdd){
			foreach ($_REQUEST['per'] as $keyPer => $valuePer) {
				$view = $valuePer['view'] == 'on' ? 1 : 0;
				$add = $valuePer['add'] == 'on' ? 1 : 0;
				$update = $valuePer['update'] == 'on' ? 1 : 0;
				$delete = $valuePer['delete'] == 'on' ? 1 : 0;
				$queryObj->qr("
					INSERT INTO admin_per (admin_id,module,admin_per.`view`,admin_per.`add`,admin_per.`update`,admin_per.`delete`)
					values ('".$adminIDAdd."','".$keyPer."','".$view."','".$add."','".$update."','".$delete."')"
				);
			}
		}
	}
	header('Location : '.$urlBackEnd.'ad/');exit;
}
if($_REQUEST['admin_id']){
	$admin = $queryObj->queryDBFirst("SELECT * FROM admin where admin_id = ".$_REQUEST['admin_id']);
	
	$adminPerData = $queryObj->queryDB("SELECT * FROM `admin_per` where admin_id  = ".$_REQUEST['admin_id']);

	$adminPerDataConvert = array();
	foreach ($adminPerData as $key => $value) {
		$adminPerDataConvert[$value['module']] = $value;
	}
}
$data = $queryObj->queryDB("SELECT * FROM admin");

$listAdmin = ''; 
if(is_array($data)){
	foreach ($data as $item) {
		$listAdmin .= '
			<tr>
				<td>'.$item['admin_id'].'</td>
				<td>'.$item['admin_username'].'</td>
				<td>'.$item['admin_password'].'</td>
				<td>'.$item['admin_email'].'</td>
				<td>'.$item['admin_create_date'].'</td>
				<td><a class="btn btn-primary" href="'.$urlBackEnd.'ad/?admin_id='.$item['admin_id'].'">edit</a></td>
			</tr>
		';
	}
}



//list danh sach per
$listPerAdmin = '';

$dataPer = $queryObj->queryDB("SELECT * FROM `per`;");
foreach ($dataPer as $keyPer=>$itemPer) {
	
	$dataPerItem = $adminPerDataConvert[$itemPer['id']];

	$selectedview 	= $dataPerItem['view'] == 1 ? 'checked' : '';
	$selectedadd  	= $dataPerItem['add'] == 1 ? 'checked' : '';
	$selectedupdate = $dataPerItem['update'] == 1 ? 'checked' : '';
	$selecteddelete = $dataPerItem['delete'] == 1 ? 'checked' : '';

	$listPerAdmin .= '
			<tr>
				<td>'.$itemPer['module'].'</td>
				<td>
					<label>
						<input type="checkbox" '.$selectedview.' name="per['.$itemPer['id'].'][view]">
				    </label>	
    			</td>
				<td>
					<label>
						<input type="checkbox" '.$selectedadd.' name="per['.$itemPer['id'].'][add]">
				    </label>	
				</td>
				<td>
					<label>
						<input type="checkbox" '.$selectedupdate.' name="per['.$itemPer['id'].'][update]">
				    </label>	
				</td>
				<td>
					<label>
						<input type="checkbox" '.$selecteddelete.' name="per['.$itemPer['id'].'][delete]">
				    </label>	
				</td>
			</tr>
	';
}
?>
<h3>Admin</h3>
<div class="" style="width: 70%;margin-left: auto;margin-right:auto;">
	<form action="<?php echo $urlBackEnd;?>ad" method="POST">
		<input type="hidden" name="admin_id" value="<?php echo $admin['admin_id'];?>">
	  	<div class="form-group">
		    <label for="">Admin User</label>
		    <input type="text" class="form-control"  placeholder="" name="admin_username" value="<?php echo $admin['admin_username'];?>">
	  	</div>
		<div class="form-group">
		    <label for="">Admin password</label>
		    <input type="text" class="form-control"  placeholder="" name="admin_password" value="">
	  	</div>
	  	<div class="form-group">
		    <label for="">Admin Email</label>
		    <input type="text" class="form-control"  placeholder="" name="admin_email" value="<?php echo $admin['admin_email'];?>">
	  	</div>
	  	


	  	<br>
		<table class="table table-striped">
			<tbody>
				<tr>
					<th>Module</th>
					<th>View</th>
					<th>Add</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
				<?php echo $listPerAdmin;?>
			</tbody>
		</table>

	  	<button type="submit" class="btn btn-default">Submit</button>
	</form>

	
</div>

<h3>Admin</h3>
<table class="table table-striped">
	<tbody>
		<tr>
			<th>#ID</th>
			<th>admin username</th>
			<th>admin password</th>
			<th>admin email</th>
			<th>Create date</th>
			<th>Option</th>
		</tr>
		<?php echo $listAdmin;?>
	</tbody>
</table>