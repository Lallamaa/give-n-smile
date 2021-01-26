<?php
  include('./includes/top.inc.php');
  
  
  if (isset($_GET['type']) && $_GET['type']!='') {
    $type=get_safe_value($_GET['type']);
    if ($type == 'status') {
      $operation=get_safe_value($conn, $_GET['camp_id']);
      if($operation=='active') {
        $staus='1';
      } else {
        $status='0';
      }
      $update_status="update organization set camp_status='$status' where camp_id='$id'";
      mysqli_query($conn, $update_status);
    }

    if ($type == 'delete') {
      $id=get_safe_value($conn, $_GET['camp_id']);
      $delete_sql="delete from organization where camp_id='$id'";
      mysqli_query($conn, $delete_sql);
    }
  }

$sql="select * from organization order by camp_id asc";
$res=mysqli_query($conn, $sql);
?>

<div class="col-md-10 content">
<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">
      Users
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
            <th scope="col">Send Email</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row=mysqli_fetch_assoc($res)) { ?>
          <tr>
            <td scope="row"><?php echo $row['camp_id']?></td>
            <td><?php echo $row['camp_name']?></td>
            <td><?php echo $row['camp_email']?></td>
            <td><?php echo $row['camp_phone']?></td>
            <td><?php 
              if($row['camp_status']==1) {
                echo "<span><a href='?type=status&operation=active&id=".$row['camp_id']. 
                "'>Active</a></span>'";
              } else {
                echo "<span><a href='?type=status&operation=deactive&id=".$row['camp_id']. 
                "'>Deactive</a></span>'";            
              }
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

