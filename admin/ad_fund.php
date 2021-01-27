<?php
  include('./includes/top.inc.php');
  
  if (isset($_GET['type']) && $_GET['type']!='') {
    $type=get_safe_value($_GET['type']);
    if ($type == 'status') {
      $operation=get_safe_value($conn, $_GET['fund_id']);
      if($operation=='approve') {
        $staus='1';
      } else if ($operation=='reject') {
        $status='0';
      } else {
        $status='-1';
      }
      $update_status="update fundraise set fund_status='$status' where fund_id='$id'";
      mysqli_query($conn, $update_status);
    }
  }
  
  $sql="select * from fundraise order by fund_id asc";
  $res=mysqli_query($conn, $sql);
?>

  <div class="col-md-10 content">
    <div class="panel panel-default">
      <div class="panel-heading">
        Fundraise Management
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
              <td scope="row"><?php echo $row['fund_id']?></td>
              <td><?php echo $row['fund_name']?></td>
              <td><?php echo $row['fund_date']?></td>
              <td><?php echo $row['fund_amount']?></td>
              <td><?php echo $row['fund_desc']?></td>
              <td><?php echo $row['fund_image']?></td>
              <td><?php 
                if($row['fund_status']==1) {
                  echo "<span><a href='?type=status&operation=approve&id=".$row['fund_id']. 
                  "'>Approve</a></span>'";
                } else if ($row['fund_status']==0){
                  echo "<span><a href='?type=status&operation=reject&id=".$row['fund_id']. 
                  "'>Reject</a></span>'";            
                } else {
                  echo "<span><a href='?type=status&operation=pending&id=".$row['fund_id']. 
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

