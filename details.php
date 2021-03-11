<?php
  session_start();
  include('app/lib/path.php');
  include(ROOT_PATH . 'app/includes/header.php');

  $query = "SELECT * FROM events";
  $event = mysqli_query($conn, $query);

  if (isset($_GET['loadEventId'])) {

    $eventID = $_GET['loadEventId'];

    $sql = "SELECT * FROM events WHERE event_id='$eventID'";
    
    
  }
?>

<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="card">
        <div class="card-body">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
              <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
              <?php //if (isset($_SESSION['event'])) { ?>
                <img src="<?php //BASE_URL; ?>app/image/jumbo_6.jpg<?php //$row['event_img']; ?>" class="d-block w-100" alt="..." />
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="app/image/jumbo_7.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
              <img src="app/image/jumbo_8.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </a>
          </div> <!-- End of Carousel -->
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="organizer-name">
            SAMPLE ORGANIZER NAME
          </div>
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui"
          <div class="col feature social">
						<a href="#"><i class="icon ion-social-facebook"></i></a>
						<a href="#"><i class="icon ion-social-twitter"></i></a>
						<a href="#"><i class="icon ion-social-instagram"></i></a>
					</div>
        </div>
      </div>
    </div>
    <!-- display donor history -->
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="donor-dp">
            DISPLAY DONOR HISTORY
          </div>
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        </div>
      </div>
    </div>
    <!-- display event details -->
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="event-title">
              SAMPLE EVENT TITLE
          </div>
          <div class="event-content">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
          </div>
          <!-- display comments  --> 
          <div class="card">
            <div class="card-body">
              <div class="comment-title">
                    COMMENTS
              </div>
              <div class="event-content">
                  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </div>
</div>
<?php include(ROOT_PATH . "app/includes/footer.php"); ?>
