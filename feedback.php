<!DOCTYPE html>
<html>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<head>
    <title>Feedback Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="app/css/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script type="text/javascript" src="app/jvs/script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&subset=latin-ext,vietnamese" rel="stylesheet">
</head>

<body>

    <div class="container">
        <h2>Feedback</h2>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open feedback form</button>

        <!-- Modal -->
        <div class="modal fade " id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content page1-->
                <div style="" class="modal-content" id="main_popup">
                    <div class="modal-body  ">
                        <div class="col-lg-12">
                            <button type="button" class="close close_model" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle
                                "></span>
                            </button>
                        </div>
                        <div class="img_feedback">
                            <img src="https://www.gse.harvard.edu/sites/default/files//banner/1500x750_studentfeedback.jpg" />
                        </div>
                        <div class="heading_msg">
                            <h3>Please help us serve you better by telling us about the website and service experience so far. <br>We appreciate your support and want to make sure we meet your expectations.</h3>

                        </div>
                        <div class="row text-center give_feedback">

                            <button type="button" id="give_feedback" class="btn btn-default">Send Feedback</button>

                        </div>
                    </div>
                </div>
                <!--END Modal content page1-->
                <!-- Modal content pg2-->
                <div id="pg2" style="display:none;" class="modal-content" style="box-shadow:none;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle
                                        "></span></button>
                        <h4 class="modal-title">Section 1 | Customer Experience</h4>
                    </div>
                    <div class="modal-body second_tab">
                        <div class="row">
                            <div class="col-xs-12 col-lg-6 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="input" class="control-label col-md-2 col-sm-2 hidden-xs">1.</label>
                                    <div class="col-md-10 col-xs-12 col-sm-8">
                                        <div class="mat-input">
                                            <div class="mat-input-outer">
                                                <input type="text" autocomplete="off" />
                                                <label class="">Your first impression of our website</label>
                                                <div class="border"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xs-12 col-lg-6 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="input" class="control-label col-md-2 col-sm-2 hidden-xs">2.</label>
                                    <div class="col-md-10 col-xs-12 col-sm-8">
                                        <div class="mat-input">
                                            <div class="mat-input-outer">
                                                <input type="text" autocomplete="off" />
                                                <label class="">Most enjoyable feature of our website</label>
                                                <div class="border"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-lg-6 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="input" class="control-label col-md-2 col-sm-2 hidden-xs">3.</label>
                                    <div class="col-md-10 col-sm-8 col-xs-12">
                                        <div class="mat-input">
                                            <div class="mat-input-outer">
                                                <input type="text" autocomplete="off" />
                                                <label class="">Your concerns before making donation</label>
                                                <div class="border"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-6 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="input" class="control-label col-md-2 col-sm-2 hidden-xs">4.</label>
                                    <div class="col-md-10 col-xs-12 col-sm-8">
                                        <div class="mat-input">
                                            <div class="mat-input-outer">
                                                <input type="text" autocomplete="off" />
                                                <label class="">Any addiational feedback</label>
                                                <div class="border"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-md-12 hidden-xs">
                                <button type="button" id="ok" class="btn btn-default ok" data-dismiss="">Ok  <span class="glyphicon glyphicon-ok"></span></button>
                            </div>
                        </div>

                        <div class="row">
                            <div class="visible-xs text-center">
                                <button type="button" id="ok" class="btn btn-default ok" data-dismiss="">Ok  <span class="glyphicon glyphicon-ok"></span></button></div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-md-6 text-left hidden-xs"> </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 hidden-xs">
                                <a href="#"><img src="app/image/icon/arrow-left.png" id="arr1" style="margin-right:0px;" width="30" height="30"></a>
                                <a href="#"><img src="app/image/icon/arrow-right.png" id="arr2" width="30" height="30"/></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Modal content pg2-->
                <!-- Modal content pg3-->
                <div id="pg3" style="display:none;" class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle
                                "></span></button>
                        <h4 class="modal-title">Section 2 | Customer Experience</h4>
                    </div>

                    <div class="modal-body row">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="col-md-1 hidden-xs">
                                    <h4>1.</h4>
                                </div>
                                <div class="col-md-11">
                                    <h5>
                                        Does this website meet your expectations?
                                    </h5>
                                    <span style="color:red" id="rating" class="rating" data-current-rating=0 data-icon-bad='fa fa-heart-o' data-icon-good='fa fa-heart'></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-1 hidden-xs">
                                    <h5>2.</h5>
                                </div>
                                <div class="col-md-11 hidden-xs">
                                    <h5>
                                        How would you rate the based on visuals on our website?
                                    </h5>
                                    <span style="color:red" id="rating" class="rating" data-current-rating=0 data-icon-bad='fa fa-heart-o' data-icon-good='fa fa-heart'></span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <div class="col-md-1 hidden-xs">
                                    <h5>3.</h5>
                                </div>
                                <div class="col-md-11">
                                    <h5>
                                        How would you rate the overall statisfaction on this website?
                                    </h5>
                                    <span style="color:red" id="rating" class="rating" data-current-rating=0 data-icon-bad='fa fa-heart-o' data-icon-good='fa fa-heart'></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-1 hidden-xs">
                                    <h5>4.</h5>
                                </div>
                                <div class="col-md-11">
                                    <h5>
                                        How likely would you will recommend us to others?
                                    </h5>
                                    <span style="color:red" id="rating" class="rating" data-current-rating=0 data-icon-bad='fa fa-heart-o' data-icon-good='fa fa-heart'></span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="col-xs-12 col-lg-6 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <label for="input" class="control-label col-md-2 col-sm-2 hidden-xs"></label>
                                    <div class="col-md-10 col-xs-12 col-sm-8">
                                        <div class="mat-input">
                                            <div class="mat-input-outer" style="margin-bottom:35px;"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="button" id="ok2" class="btn btn-default ok" data-dismiss="">Ok  <span class="glyphicon glyphicon-ok"></span></button></div>
                        </div>
                    </div>


                    <div class="modal-footer col-md-12">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-md-6 text-left hidden-xs"> </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 hidden-xs">
                            <a href="#"><img src="app/image/icon/arrow-left.png" id="arr3" style="margin-right:0px;" width="30" height="30"></a>
                                <a href="#"><img src="app/image/icon/arrow-right.png" id="arr4" width="30" height="30"/></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Modal content pg3-->
                <!-- Modal content page 4-->
                <div id="pg4" style="display:none;" class="modal-content">
                    <div class="modal-body ">
                        <div class="col-lg-12">
                            <button type="button" class="close close_model" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle
                                        "></span>
                                    </button>
                        </div>
                        <div class="thank_you_body">
                            <div class="heading_msg2">
                                <h3>
                                    <span>Thank you!</span><br> Your feedback was sent perfectly. We will work on it to improve our website.
                                </h3>

                            </div>
                            <div class="row text-center give_feedback">

                                <button type="submit" class="btn btn-default " data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>

                </div>
                <!--End Modal content page 4-->
            </div>
        </div>

    </div>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $("#myModal").modal('show');
            $("#give_feedback,#arr3").click(function() {
                $("#pg2").show();
                $("#pg3").hide();
                $("#pg4").hide();
                $("#main_popup").hide();
            });

        });
        $("#ok,#arr2").click(function() {
            $("#pg2").hide();
            $("#pg3").show();
            $("#pg4").hide();
            $("#main_popup").hide();
        });
        $("#ok2,#arr4").click(function() {
            $("#pg2").hide();
            $("#pg3").hide();
            $("#pg4").show();
            $("#main_popup").hide();
        });
        $("#arr1").click(function() {
            $("#pg2").hide();
            $("#pg3").hide();
            $("#pg4").hide();
            $("#main_popup").show();
        });
    </script>
    <script>
        new WOW().init();
    </script>
    <script>
        $(function() {
            $('.mat-input-outer label').click(function() {
                $(this).prev('input').focus();
            });
            $('.mat-input-outer input').focusin(function() {
                $(this).next('label').addClass('active');
            });
            $('.mat-input-outer input').focusout(function() {
                if (!$(this).val()) {
                    $(this).next('label').removeClass('active');
                } else {
                    $(this).next('label').addClass('active');
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.rating').feedbackInit({
                success: function(feedbackWidget, rating) {
                    alert(rating);
                },
                iconGood: "fa-bicycle",
                iconBad: "fa-car",
            });
            $(".rating2").feedbackInit({
                success: function(feedbackWidget, rating) {
                    alert(rating);
                }
            })
        });
    </script>
    </div>
</body>
</html>