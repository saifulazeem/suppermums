<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="src/css/style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>

</head>
<body>
    <div class="fluid-container flu-header sticky-top">
        <br>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark " id="stick">
                    <!-- <a class="navbar-brand" href="#"><img src="src/images/7news.png" width="200px" height="64px" alt="logo"></a> -->
                    <a class="navbar-brand" href="#"><img class="img-fluid" src="src/images/logo.png" alt="logo" heigh="150" width="300"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown ">
                        <ul class="navbar-nav" >
                        <li class="nav-item " style=" border: 3px solid; border-left-style: hidden; border-right-style: hidden; border-top-style: hidden" >
                            <a id="nav-btn" class="nav-link " href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-btn" class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-btn" class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a id="nav-btn" class="nav-link" href="#">Mission</a>
                        </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
<?php //include("footer.php"); ?>
<!-- </body>
</html> -->
<div class="fluid-container"  style="background-image: url(src/images/hd.webp);">
<br><br>
<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3  col-sm-12"></div>
            <div class="col-lg-6 col-md-6  col-sm-12">
                <div class="input-group " id="srch-frm" >
                    <input style="height:50px;" type="text" class="form-control" name="user_srch" placeholder="Search Recipies...">
                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-search">Search</i>
                    </button>
                </div>
            </div>
            <div class="col-lg-3 col-md-3  col-sm-12"></div>
        </div>
</div>
<br>
<br>
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-3 col-md-9  col-sm-12"></div>
            <div class="col-lg-9 col-md-9  col-sm-12">
                <br>
                <div class="row">
                    <div class="col-lg-4 col-md-12  col-sm-12"></div>
                    <div class="col-lg-8 col-md-12 col-sm-12"><img class="img-fluid"  src="src/images/pics1.jpg" alt=""></div>
                </div>
            </div> -->
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="text-align:center;">
                    <div class="carousel-item active" >
                    <img class="img-fluid"  src="src/images/12.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                    <img class="img-fluid"  src="src/images/12.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                    <img class="img-fluid"  src="src/images/12.jpg" alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br><br>
</div>
<br>
<br>
<!-- start -->

<div class="container-fluid">
	<div class="row justify-content-center">
		<!-- <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2"> -->
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">Steps to Register User </h2>
                <p>Fill all form field to go to next step</p>

                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="confirm"><strong>Start</strong></li>
                        <li id="account"><strong>Passport</strong></li>
                        <li id="payment"><strong>Qualification</strong></li>
                        <li id="personal"><strong>Experience</strong></li>
                        <li id="personal"><strong>Personal</strong></li>
                        <li id="payment"><strong>ID</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <br>
                </form>
            </div>
        <!-- </div> -->
	</div>
</div>


<!-- End -->

<br>
<br>
<div class="container">
    <br>
        <div>
            <div style="text-align:center; color:#fff; padding:15px;" class="row" id="pointer">
            <h1 style="margin-left:10px">Instructions</h1>
            </div><br><br>
            <div style="border: 1px solid #e2e2e2; border-radius:10px; padding:15px;">
                <h4>Hi NAME!</h4>
                <p style="text-align:left">Your journey to register with Super Mums has now begun!</p>
                <p style="text-align:left"> Please click on the Start Application button below and you will be able to complete our simple online application form! It should take you around 10 minutes to complete the form and there are a few things you will need. These are:</p>
                <ul>
                    <li>Your passport (you will need to upload a scan or clear photo)</li>
                    <li>Any childcare qualifications (you will need to upload a scan or clear photo of any certificates) – please don’t worry if you don’t have any childcare qualifications though!</li>
                    <li>Details of previous childcare experience, including contact details for references</li>
                    <li>Your National Insurance Number (if you have one – but you can still complete the form if you don’t have your NIN yet!)</li>
                    <li>If you are an EU citizen, you will need your Share Code so that we can download settlement status</li>
                    <li>If you are a non-EU citizen, you will need to upload a scan or clear photo of your Residence Permit</li>
                </ul>
                <br>
                <a style="float:right" href="#" class="btn btn-primary">Start Application</a>
                <br><br>
            </div>
        </div>
    <br>
    <br>
    <div style="text-align:center; color:#fff; padding:15px;" class="row" id="pointer">
        <h1 style="margin-left:10px">Services</h1>
    </div><br>
    <div class="row">
        <div class="col-lg-4 col-md-12  col-sm-12">
            <h2>Service Title</h2>
            <p>Image at the top (card-img-top):</p>
            <div class="card">
                <img class="card-img-top  img-thumbnail" src="src/images/12.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="#" class="btn btn-primary">Read more...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12  col-sm-12">
        <h2>Service Title</h2>
            <p>Image at the top (card-img-top):</p>
            <div class="card">
                <img class="card-img-top  img-thumbnail " src="src/images/12.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="#" class="btn btn-primary">Read more...</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12  col-sm-12">
        <h2>Service Title</h2>
            <p>Image at the top (card-img-top):</p>
            <div class="card">
                <img class="card-img-top  img-thumbnail " src="src/images/12.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="#" class="btn btn-primary">Read more...</a>
                </div>
            </div><br>
            <a style="float:right" href="#" class="btn btn-primary">Show More...</a>
        </div>
    </div>
    <br>
    <br>
    <div style="text-align:center; color:#fff; padding:15px;" class="row" id="pointer">
        <h1 style="margin-left:10px">Team</h1>
    </div><br><br>
    <div class="row">
        <div class="col-lg-4 col-md-12  col-sm-12">
            <h2>Designation</h2>
            <div class="card">
                <img class="card-img-top img-fluid" src="src/images/profile.webp" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12  col-sm-12">
        <h2>Designation</h2>
            <div class="card">
                <img class="card-img-top img-fluid " src="src/images/profile.webp" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12  col-sm-12">
        <h2>Designation</h2>
            <div class="card">
                <img class="card-img-top img-fluid " src="src/images/profile.webp" alt="Card image" style="width:100%">
                <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
            </div><br>
            <!-- <a style="float:right" href="#" class="btn btn-primary">Show More...</a> -->
        </div>
    </div>
    <br>
    <br>
</div>
<br>
<br>
<br>

<div class="fluid-container" style="background-image: url(src/images/footimg.png);">
    <div class="container" style="text-align:center; padding:15px;">
    <h1 style="float:left; color:#fff;">Super Mums</h1>
    <br>
    <br>
    <hr style="color:#fff;width:100%;text-align:left;margin-left:0;border: 2px solid;">
        <div class="row" style="color:#e2e2e2;">
            <div class="col-lg-3 col-md-4 col-sm-12">
            <h3>Quick Links</h3>
            <ul>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Business</a></li>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Politics</a></li>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Food</a></li>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Health</a></li>
            </ul>
            </div>
            <div class="col-lg-3 col-md-4  col-sm-12">
            <h3>Categories</h3>
            <ul>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Business</a></li>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Politics</a></li>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Food</a></li>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Health</a></li>
            </ul>
            </div>
            <div class="col-lg-3 col-md-4  col-sm-12">
            <h3>Latest News</h3>
            <ul>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Business</a></li>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Politics</a></li>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Food</a></li>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Health</a></li>
            </ul>
            </div>
            <div class="col-lg-3 col-md-4  col-sm-12">
            <h3>Social Links</h3>
            <ul>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Business</a></li>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Politics</a></li>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Food</a></li>
                <li class="lst"><a style="color:#fff" class="nav-link" href="#">Health</a></li>
            </ul>
            </div>
        </div>
        <hr style="color:#fff;width:100%;text-align:left;margin-left:0;border: 2px solid;">
        <div class="row" >
            <p>© 2022 All copyrights Reserved <a style="color:#e2e2e2;" href="https://wwww.supermums.com/">wwww.SuperMums.com</a></p>
            </div>
        </div>
</div>
</body>
</html>