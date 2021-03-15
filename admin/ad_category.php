<?php
  include('../app/database/connect.php');
  include('includes/top.inc.php'); 
  include(ROOT_PATH . 'admin/includes/function.php');


  if(isset($_GET['type']) && $_GET['type']!='') {

    $type=get_safe_value($conn, $_GET['type']);

    if($type=='status') {

      $operation=get_safe_value($conn,$_GET['operation']);
      $id=get_safe_value($conn, $_GET['id']);

      if($operation=='active'){
        $status='1';
      }else{
        $status='0';
      }
      $update_status_sql="update category set cat_status='$status' where cat_id='$id'";
      mysqli_query($conn, $update_status_sql);
    }
    
    if($type=='delete'){
      $id=get_safe_value($conn,$_GET['id']);
      $delete_sql="delete from category where cat_id='$id'";
      mysqli_query($conn, $delete_sql);
    }
  }
  
  $sql="select * from category order by cat_name asc";
  $res=mysqli_query($conn, $sql);
?>

<div class="col-md-10 content">
  <div class="row">
    <div class="panel panel-default">
      <div class="panel-heading">
        Categories Management
        <a class="box-link" href="manage_categories.php"><span class='align-end p-2 glyphicon glyphicon-plus'></span></a>
      </div>
      
      <div class="panel-body ad-category">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Category</th>
              <th scope="col">Status</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row=mysqli_fetch_assoc($res)) { ?>
            <tr>
              <td scope="row"><?php echo $row['cat_id']?></td>
              <td><?php echo $row['cat_name']?></td>
              <td>
              <?php 
                if($row['cat_status']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['cat_id']."'>Active</a></span>&nbsp;";
								} else{
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['cat_id']."'>Deactive</a></span>&nbsp;";
								}
              ?>
              </td>
              <td>
              <?php
								echo "<span class='badge badge-edit'><a href='manage_categories.php?id=".$row['cat_id']."'>Edit</a></span>&nbsp;";
							?>
              </td>
              <td>
              <?php	
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['cat_id']."'>Delete</a></span>";
              ?>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</body>    
</html>

