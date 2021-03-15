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
      $update_status="update events set event_status='$status' where event_id='$id'";
      mysqli_query($conn, $update_status);
    }
  }
  
  $sql="SELECT * FROM events ORDER BY event_id ASC";
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
              <th scope="col">Image</th>
              <th scope="col">Name</th>
              <th scope="col">Start-Date</th>
              <th scope="col">End-Date</th>
              <th scope="col">Target Fund Amount (RM)</th>
              <th scope="col">Funded Amount (RM)</th>
              <th scope="col">Area (optional)</th>
              <th scope="col">Category</th>
              <th scope="col">Organizer</th>
              <th scope="col">Organizer ID</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row=mysqli_fetch_assoc($res)) { ?>
            <tr>
              <td scope="row"><?php echo $row['event_id']?></td>
              <td><img src="<?php echo $row['event_img']?>" height="100" width="100"  style="object-fit: cover; !important;"></td>
              <td><?php echo $row['event_name']?></td>
              <td><?php echo $row['event_start']?></td>
              <td><?php echo $row['event_end']?></td>
              <td><?php echo $row['event_amount']?></td>
              <td><?php echo $row['event_fund']?></td>
              <td><?php echo $row['event_area']?></td>
              <td><?php echo $row['category']?></td>
              <td><?php echo $row['organizer_name']?></td>
              <td><?php echo $row['organizer_id']?></td>
              <td><?php 

                if($row['event_status']==1){
									echo "<span class='badge badge-complete'><a href='?type=status&operation=dective&id=".$row['event_id']."'>Approve</a></span>&nbsp;";
								} else {
									echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['event_id']."'>Pending</a></span>&nbsp;";
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

