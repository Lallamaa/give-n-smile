<?php
  include('../app/lib/path.php');
  include(ROOT_PATH . 'admin/includes/top.inc.php'); 
    
  if (isset($_GET['type']) && $_GET['type']!='') {
    $type=get_safe_value($_GET['type']);
    if ($type == 'status') {
      $operation=get_safe_value($conn, $_GET['fb_id']);
      if($operation=='active') {
        $staus='1';
      } else {
        $status='0';
      }
      $update_status="update category set fb_status='$status' where fb_id='$id'";
      mysqli_query($conn, $update_status);
    }

    if ($type == 'delete') {
      $id=get_safe_value($conn, $_GET['fb_id']);
      $delete_sql="delete from category where fb_id='$id'";
      mysqli_query($conn, $delete_sql);
    }
  }

$sql="select * from feedbacks order by fb_id asc";
$res=mysqli_query($conn, $sql);
?>

<div class="col-md-10 content">
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      Feedbacks
    </div>
    
    <div class="panel-body">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Feedbacks</th>
            <th scope="col">Date & Time</th>
            <th scope="col">Status</th>
            <th scope="col">Delete</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row=mysqli_fetch_assoc($res)) { ?>
          <tr>
            <td scope="row"><?php echo $row['fb_id']?></td>
            <td><?php echo $row['fb_name']?></td>
            <td><?php //echo $row['fb_amount']?></td>
            <td><?php 
              if($row['fb_status']==1) {
                echo "<span><a href='?type=status&operation=deactive&id=".$row['fb_id']. 
                "'>Active</a></span>'";
              } else {
                echo "<span><a href='?type=status&operation=active&id=".$row['fb_id']. 
                "'>Deactive</a></span>'";            
              }
            ?>
            </td>      
            <td>    
              <?php
                echo "<span><a href='?type=delete&id=".$row['fb_id']. 
                "'>Delete</a></span>'";
              ?>
            </td>
            <td>
              <?php
                echo "<span><a href='?type=edit&id=".$row['fb_id']. 
                "'>Edit</a></span>'";
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

