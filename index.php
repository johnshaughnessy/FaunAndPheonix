<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Faun and Pheonix</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/emotiv2.jpg" alt="Coding Club">
          <div class="container">
            <div class="carousel-caption">
              <h1>Mind-Controlled Robots</h1>
              <p>The Coding Club's latest project will make use of an Emotiv headset and Arduino-powered robot arm to
                let us take control with our thoughts.</p>
              <p><a class="btn btn-large btn-primary" 
                    href="mailto:jshaughnessy14@cmc.edu?subject=Coding Club Signup&body=Hi There!%0D%0A %0D%0AI'd like to sign up for the coding club!%0D%0A %0D%0A About me:">Sign up for Claremont Coding Club</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/sailboat.jpg" alt="Sailboat">
          <div class="container">
            <div class="carousel-caption" id="sailing">
              <h1>Sailing with George</h1>
              <p>What could be better than spending Sunday afternoon tacking and jibing with the wind at Marina del Rey?</p>
              <!-- <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="images/geometry.png" alt="Arithmetic Geometry">
          <div class="container">
            <div class="carousel-caption">
              <h1>Arithmetic Geometry Seminar</h1>
              <p>Can we count the number of rational points on any given curve?</p>
              <p><a class="btn btn-large btn-primary" href="http://www.claremontmckenna.edu/pages/faculty/lenny/wrk_nt_grp.html">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="Generic placeholder image">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette" id="a">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="about">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/john.jpg" alt="John Shaughnessy">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">A bit about me<br><span class="text-muted">and why I made this site</span></h2>
          <p class="lead">My name is John Shaughnessy and I am a senior at Claremont McKenna College studying Math and Computer Science.  I made this site to share my interests with the world in a way that Facebook and other social media sites don't let me.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="contact">
        <div class="col-md-7">
          <h2 class="featurette-heading">How to contact me <br><span class="text-muted">(and have me respond)</span></h2>
          <p class="lead">The best way to contact me is by 
            <a 
                    href="mailto:jshaughnessy14@cmc.edu">sending me an email.</a> </p>
          <p class="lead"> Feel free to 
            <a  
                    href="http://www.linkedin.com/profile/view?id=209294787">view my linkedIn profile</a>, although I do not check it as often as my email.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/kittyphone.jpg" alt="Hello Kitty Phone">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Faun and Pheonix, Inc. &middot; <a href="#">Contact</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


     
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
    <script src="js/animatedScroll.js"></script>

    <script type="text/javascript">
      $(document).ready(function () {
          $('.carousel').carousel({
              interval: 3000
          });

      });
      </script> 

  </body>
</html>
