<?php

function get_safe_value($conn, $str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($conn, $str);
	}
}


if(isset($_GET['action']) && $_GET['action']!='') {

  $action=get_safe_value($conn, $_GET['action']);

  if($action=='edit') {

    
    $update_status_sql="update category set cat_status='$status' where cat_id='$id'";
    mysqli_query($conn, $update_status_sql);
  }
  
  if($action=='delete') {
    $id=get_safe_value($conn, $_GET['id']);
    $delete_sql="delete from category where cat_id='$id'";
    mysqli_query($conn, $delete_sql);
  }
}

$sql="select * from category order by cat_name asc";
$res=mysqli_query($conn, $sql);