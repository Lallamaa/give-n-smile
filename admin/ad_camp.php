<?php
  include('./includes/top.inc.php');
  
  if (isset($_GET['type']) && $_GET['type']!='') {
    $type=get_safe_value($_GET['type']);
    if ($type == 'status') {
      $operation=get_safe_value($conn, $_GET['camp_id']);
      if($operation=='approve') {
        $staus='1';
      } else if ($operation=='reject') {
        $status='0';
      } else {
        $status='-1';
      }
      $update_status="update campaign set camp_status='$status' where camp_id='$id'";
      mysqli_query($conn, $update_status);
    }
  }
  
  $sql="select * from campaign order by camp_id asc";
  $res=mysqli_query($conn, $sql);
?>

  <div class="col-md-10 content">
    <div class="panel panel-default">
      <div class="panel-heading">
        Campaigns
      </div>
      <div class="panel-body">
      <table class="table table-striped">
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
              <td scope="row"><?php echo $row['camp_id']?></td>
              <td><?php echo $row['camp_name']?></td>
              <td><?php echo $row['camp_date']?></td>
              <td><?php echo $row['camp_amount']?></td>
              <td><?php echo $row['camp_desc']?></td>
              <td><?php echo $row['camp_image']?></td>
              <td><?php 
                if($row['camp_status']==1) {
                  echo "<span><a href='?type=status&operation=approve&id=".$row['camp_id']. 
                  "'>Approve</a></span>'";
                } else if ($row['camp_status']==0){
                  echo "<span><a href='?type=status&operation=reject&id=".$row['camp_id']. 
                  "'>Reject</a></span>'";            
                } else {
                  echo "<span><a href='?type=status&operation=pending&id=".$row['camp_id']. 
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

