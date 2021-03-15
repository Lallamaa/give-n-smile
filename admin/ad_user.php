<?php
  include('../app/database/connect.php');
  include('includes/top.inc.php'); 
  
  if (isset($_GET['type']) && $_GET['type']!='') {
    $type=get_safe_value($conn, $_GET['type']);
    if ($type == 'status') {
      $operation=get_safe_value($conn, $_GET['operation']);
      $id=get_safe_value($conn, $_GET['id']);

      if($operation=='active') {
        $status='1';
      } else {
        $status='0';
      }
      $update_status="update users set user_status='$status' where user_id='$id'";
      mysqli_query($conn, $update_status);
    }

    if ($type == 'delete') {
      $id=get_safe_value($conn, $_GET['id']);
      $delete_sql="delete from users where user_id='$id'";
      mysqli_query($conn, $delete_sql);
    }
  }

$sql="select * from users order by user_id asc";
$res=mysqli_query($conn, $sql);
?>

<div class="col-md-10 content">
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      Users Management
    </div>
    
    <div class="panel-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone No.</th>
            <th scope="col">Status</th>
            <th scope="col">Ban</th>
            <th scope="col">Send Email</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row=mysqli_fetch_assoc($res)) { ?>
          <tr>
            <td scope="row"><?php echo $row['user_id']?></td>
            <td><?php echo $row['user_name']?></td>
            <td><?php echo $row['user_email']?></td>
            <td><?php echo $row['user_phone']?></td>
            <td><?php 
              if($row['user_status']==1) {
                echo "<span class='badge badge-complete'><a href='?type=status&operation=dective&id=".$row['user_id']. 
                "'>Active</a></span>";
              } else {
                echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['user_id']. 
                "'>Deactive</a></span>";            
              }
            ?>
            </td>
            <td>
              <?php
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['user_id']."'>Delete</a></span>";
                ?>
            </td>
            <td>
              <?php
                echo "<a href='#'><span class='text-center glyphicon glyphicon-comment'></span></a>";
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

