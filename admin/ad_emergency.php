<?php
  include('../app/database/connect.php');
  include('includes/top.inc.php'); 
  include(ROOT_PATH . 'admin/includes/function.php');

    
  if (isset($_GET['type']) && $_GET['type']!='') {
    $type=get_safe_value($_GET['type']);
    if ($type == 'status') {
      $operation=get_safe_value($conn, $_GET['event_id']);
      if($operation=='approve') {
        $staus='1';
      } else if ($operation=='reject') {
        $status='0';
      } else {
        $status='-1';
      }
      $update_status="update events set event_status='$status' where event_id='$id'";
      mysqli_query($conn, $update_status);
    }
  }
  
  $sql="select * from events order by event_id asc";
  $res=mysqli_query($conn, $sql);
?>

  <div class="col-md-10 content">
    <div class="panel panel-default">
      <div class="panel-heading">
        Emergency Events
      </div>
      <div class="panel-body">
      <table class="table table-danger table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Date</th>
              <th scope="col">Fund Amount</th>
              <th scope="col">Description</th>
              <th scope="col">Image</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row=mysqli_fetch_assoc($res)) { ?>
            <tr>
              <td scope="row"><?php echo $row['event_id']?></td>
              <td><?php echo $row['event_name']?></td>
              <td><?php echo $row['event_date']?></td>
              <td><?php echo $row['event_amount']?></td>
              <td><?php echo $row['event_desc']?></td>
              <td><?php echo $row['event_image']?></td>
              <td><?php 
                if($row['event_status']==1) {
                  echo "<span><a href='?type=status&operation=approve&id=".$row['event_id']. 
                  "'>Approve</a></span>'";
                } else if ($row['event_status']==0){
                  echo "<span><a href='?type=status&operation=reject&id=".$row['event_id']. 
                  "'>Reject</a></span>'";            
                } else {
                  echo "<span><a href='?type=status&operation=pending&id=".$row['event_id']. 
                  "'>Pending</a></span>'"; 
                }
              ?>
              </td>      
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>    
</html>

