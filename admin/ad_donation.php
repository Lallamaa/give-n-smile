<?php
  include('../app/lib/path.php');
  include(ROOT_PATH . 'admin/includes/top.inc.php'); 
  
    if (isset($_GET['type']) && $_GET['type']!='') {
      $type=get_safe_value($_GET['type']);
      if ($type == 'status') {
        $operation=get_safe_value($conn, $_GET['do_id']);
        if($operation=='success') {
          $staus='1';
        } else {
          $status='0';
        }
        $update_status="update donation set do_status='$status' where do_id='$id'";
        mysqli_query($conn, $update_status);
      }
    }
    
    $sql="select * from donation order by do_id asc";
    $res=mysqli_query($conn, $sql);
  ?>
  
    <div class="col-md-10 content">
      <div class="panel panel-default">
        <div class="panel-heading">
          Donation History
        </div>
        <div class="panel-body">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Date</th>
                <th scope="col">Amount</th>
                <th scope="col">Comment</th>
                <th scope="col">Users</th>
                <th scope="col">Event</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
              while ($row=mysqli_fetch_assoc($res)) { ?>
              <tr>
                <td scope="row"><?php echo $row['do_id']?></td>
                <td><?php echo $row['do_name']?></td>
                <td><?php echo $row['do_date']?></td>
                <td><?php echo $row['do_cmmt']?></td>
                <td><?php echo $row['do_']?></td>
                <td><?php echo $row['do_']?></td>
                <td><?php 
                  if($row['do_status']==1) {
                    echo "<span><a href='?type=status&operation=success&id=".$row['do_id']. 
                    "'>Succesful</a></span>'";
                  } else {
                    echo "<span><a href='?type=status&operation=report&id=".$row['do _id']. 
                    "'>Unsuccesful</a></span>'"; 
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

