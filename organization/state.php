<?php
	include("../app/lib/path.php"); 
    include(ROOT_PATH . "app/database/connect.php");

if(isset($_POST["org_state"])){ 
    // Fetch state data based on the specific country 
    $result = mysqli_query($conn, "SELECT * FROM state_city WHERE org_state = ".$_POST['org_state']." GROUP BY city"); ?> 
    <select name="org_city" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
    <label for="floatingInputGrid">City</label>
    <option value=" ">City</option>
    
    <?php 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['id'].'">'.$row['city'].'</option>'; 
        } 
    }



?>