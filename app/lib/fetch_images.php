<?php

//fetch_images.php

include('../database/connect.php');

$query = "SELECT * FROM events ORDER BY event_img DESC";

$statement = $connect->prepare($query);

$output = '<div class="row">';

if($statement->execute())
{
 $result = $statement->fetchAll();

 foreach($result as $row)
 {
  $output .= '
  <div class="carousel-item">
    <img src="data:image/png;base64,'.base64_encode($row['event_img']).'" class="img-thumbnail" />
  </div>';
 }
 echo $output;
}

?>
