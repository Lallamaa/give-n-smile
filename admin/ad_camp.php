<?php
    include('top.inc.php');
?>

  <div class="col-md-10 content">
    <div class="panel panel-default">
      <div class="panel-heading">
        Dashboard
      </div>
      <div class="panel-body">
      <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Category</th>
              <th scope="col">Amount</th>
              <th scope="col">Status</th>
              <th scope="col">Delete</th>
              <th scope="col">Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while ($row=mysqli_fetch_assoc($res)) { ?>
            <tr>
              <td scope="row"><?php echo $row['cat_id']?></td>
              <td><?php echo $row['cat_name']?></td>
              <td><?php //echo $row['cat_amount']?></td>
              <td><?php 
                if($row['cat_status']==1) {
                  echo "<span><a href='?type=status&operation=deactive&id=".$row['cat_id']. 
                  "'>Active</a></span>'";
                } else {
                  echo "<span><a href='?type=status&operation=active&id=".$row['cat_id']. 
                  "'>Deactive</a></span>'";            
                }
              ?>
              </td>      
              <td>    
                <?php
                  echo "<span><a href='?type=delete&id=".$row['cat_id']. 
                  "'>Delete</a></span>'";
                ?>
              </td>
              <td>
                <?php
                  echo "<span><a href='?type=edit&id=".$row['cat_id']. 
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
</body>    
</html>

