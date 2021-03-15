<?php
  session_start();
  include('app/lib/path.php');
  include(ROOT_PATH . 'app/includes/header.php');

  // $query = "SELECT * FROM events";
  // $event = mysqli_query($conn, $query);

  if (isset($_GET['loadeventID'])) {

    $eventID = $_GET['loadeventID'];

    $sql = "SELECT * FROM events WHERE event_id='$eventID';";
    $query = mysqli_query($conn, $sql);
    
    $donorSql = "SELECT * FROM donation INNER JOIN events ON donation.do_event_id=events.event_id WHERE donation.do_event_id='$eventID'";
    $donorQuery = mysqli_query($conn, $donorSql);
  }
?>


<div class="container">
  <div class="row">
  <?php while($row = mysqli_fetch_assoc($query)) { ?>

    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="card image-preview">
        <div class="card-body">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner ">
              <div class="carousel-item active">
                <img src="<?php echo $row['event_img']; ?>" class="d-block w-100" alt="..." />
                <!-- <div class="carousel-caption d-none d-md-block">
                  
                </div> -->
              </div>
            </div>
          </div> <!-- End of Carousel -->
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 side-block">
      <div class="card">
        <div class="card-body">
          <div class="organizer-name">
            <h4><b><?= $row['organizer_name']; ?></b></h4>
          </div>
            <?= $row['event_desc']; ?>
          <div class="col feature social text-right">
						<a href="#"><i class="bi bi-facebook"></i></a>
						<a href="#"><i class="bi bi-life-preserver"></i></a>
					</div>
        </div>
      </div>
    </div>
    <!-- display donor history -->
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="donor-dp">
            <h3>Donor History</h3>
          </div>
          <div class="tab-pane fade show active" style="font-size:14px;">
            <table class="table" cellspacing="0" >
              <thead>
                <tr>
                  <th>Donor</th>
                   <th>Amount Donation</th>
                </tr>                                                       
               </thead>
               <tbody>
              <?php while ($result = mysqli_fetch_assoc($donorQuery)) {
                      echo ' <tr>
                              <td>'. $result["do_user_name"] .'</td>
                              <td>RM '. number_format($result["do_amount"], 2) .'</td>
                            </tr>';
                    }
              ?>
                </tbody>
                </table>
           </div>                     
        </div>
      </div>
    </div>
    <!-- display event details -->
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="event-title">
            <?= $row['event_name']; ?>
          </div>
          <div class="event-content">
            <?= $row['event_desc']; ?>
          </div>
          <!-- display comments  --> 
          <!-- <div class="card comment-card">
            <div class="card-body">
              <div class="comment-title">
                    COMMENTS
              </div>
  <div class="event-content">
    <div class="row">
        <div class="panel panel-default widget">
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a style="font-size:14px;">Bhaumik Patel</a>
                                    <div class="mic-info">
                                        <a style="font-size:12px;" >on 11 Feb 2021</a> 
                                    </div>
                                </div>
                                <div class="comment-text" style="font-size:14px;">
                                    Awesome design!
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a style="font-size:14px;">Chong He</a>
                                    <div class="mic-info">
                                        <a style="font-size:12px;" >on 9 Jan 2021</a> 
                                    </div>
                                </div>
                                <div class="comment-text" style="font-size:14px;">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a style="font-size:14px;">Jacob Lim</a>
                                    <div class="mic-info">
                                        <a style="font-size:12px;" >on 23 Feb 2021</a> 
                                    </div>
                                </div>
                                <div class="comment-text" style="font-size:14px;">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a href="# " class="btn btn-primary btn-sm btn-block" role="button"><span class="glyphicon glyphicon-refresh"></span> More</a>
            </div>
        </div>
</div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>      
  <?php } ?>
  </div>
</div>

<?php include(ROOT_PATH . "app/includes/footer.php"); ?>
