<?php
    $emailDelivered = $_GET['emailDelivered']; //similar to req.query
    //echo $emailDelivered;
    if ($emailDelivered == 'true') {
        $contactMessage = "I will contact you shortly.  Thanks for your email ";
    }
    echo $contactMessage;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="Curtis Jenkins" content="">
    <title>Curtis Jenkins Portfolio</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="js/isInViewport.min.js"></script> -->
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="js/bootstrap-validator/dist/validator.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!--   <link rel="stylesheet" type="text/css" href="css/animate.css"> -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/profile-card-style.css"> -->
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet" type="text/css">
</head>

<body>
    <img id="bg" src="img/express.jpg" />
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="img/curtis.png" />
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- <li class="active"> -->
                     <li>
                        <a href="#home">Home<span class="sr-only">(current)</span>  </a>
                     </li>
                     <li><a href="#reboot">New Skills</a></li>
                     <li><a href="#projects">Sample Projects</a></li>
                    <!-- <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Boot Camp<span class="caret"></span>  </a>
                        <ul class="dropdown-menu">
                            <li><a href="#reboot">New Skills</a></li>
                            <li><a href="#projects">Sample Projects</a></li>
                        </ul>
                    </li> -->
                    <li><a href="#contact">Contact Me</a></li>
                    <li>
                        <a href="Curtis_L_Jenkins.pdf" target="_blank">Resume</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Header -->
    <section id="home">
       
        <div class="container-fluid">
            <div class="row">
                <div id="home-card" class="col-md-6 col-md-offset-3">
                    <!-- <div class="col-md-12"> -->
                        <!-- <div class="card-block"> -->
                            <div class="line1">Curtis L Jenkins</div>
                            <div class="line2">Experienced IT Professional</div>
                            <div id="divider">
                                <img src="img/divider.png">
                            </div>
                            <div class="line3">Builder Of Things</div>
                        <!-- </div> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Boot Camp -->
    <section id="reboot" class="page text-center">
        <div class="container-fluid">
            <div class="col-md-12 text-md-center">
                <h1 class="cursive-font">New Skills Learned In Boot Camp</h1>
                <p class="lead">16 Week Immersive Program at 
                    <a target="_blank" href="http://digitalcrafts.com">DigitalCrafts</a></p>
                <br>
            </div>
            <div class="logos">
                <img src="img/background2.jpg">
            </div>
        </div>
    </section>
    <section id="projects" class="page text-center">
        <a name="projects"></a>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="cursive-font">Sample Boot Camp Projects</h1>
                    <p class="lead">My
                        <a target="_blank" href="http://github.com/curtjenk">github</a> repo
                    </p>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="mg-tile">
                        <h3>Google Maps</h3>
                        <hr/>
                        <p class="cursive-font mg-tile-text">
                            Powered by Google Maps api with custom transitions in javascript.
                        </p>
                        <a href="http://curtisjenkins.net/google-maps"  target="_blank" class="try-btn">Try It</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mg-tile">
                        <h3>Memory Game</h3>
                        <hr/>
                        <p class="cursive-font mg-tile-text">
                            CSS and JQuery fun.  Test your memory at three levels!
                        </p>
                        <a href=""  target="_blank" class="try-btn">Coming Soon</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mg-tile">
                        <div>
                            <h3>My Grub!</h3>
                            <hr/>
                            <p class="cursive-font mg-tile-text">
                                The winning team project. Powered by the Yumly recipe api with a custom recipe recommendation engine. Warning, if you stay too long you may get hungry!
                            </p>
                            <a href=""  target="_blank" class="try-btn">Coming Soon</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mg-tile">
                        <h3>Tic Tac Toe</h3>
                        <hr/>
                        <p class="cursive-font mg-tile-text">
                            Classic game. Play against the computer or a human apponent
                        </p>
                        <a href=""  target="_blank" class="try-btn">Coming Soon</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="mg-tile">
                        <h3>DC Roasters</h3>
                        <hr/>
                        <p class="cursive-font mg-tile-text">
                            A Better Way to get the most flavorful coffee delivered just when you need it.
                        </p>
                        <a href="http://curtisjenkins.net/dc-roasters"  target="_blank" class="try-btn">Try It</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mg-tile">
                        <h3>Who Will You Vote For?</h3>
                        <hr/>
                        <p class="cursive-font mg-tile-text">
                            Vote for your Marvel Comics champion
                        </p>
                        <a href="http://curtisjenkins.net/vote-app" target="_blank" class="try-btn">Try It</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mg-tile">
                        <div>
                            <h3>Bookmarks Manager</h3>
                            <hr/>
                            <p class="cursive-font mg-tile-text">
                               Take your bookmarks whereever you go! 
                            </p>
                            <a href="http://curtisjenkins.net/bookmarks"  target="_blank" class="try-btn">Try It</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mg-tile">
                        <h3>Coming Soon</h3>
                        <hr/>
                        <p class="cursive-font mg-tile-text">
                            
                        </p>
                        <a href=""  target="_blank" class="try-btn">Coming Soon</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" class="page">
       <a name="contact"></a>
        <div class="container-fluid">
            <div class="col-md-12  text-center">
                <div>
                    <h1 class="cursive-font">Contact Me</h1>
                    <h3 class="angular-red"><?php echo $contactMessage; ?></h3>
                </div>
            </div>
           
            <div class="col-md-offset-2 col-md-6">
                <form action="mail.php" method="post" data-toggle="validator" role="form" id="contact-form" name="contact">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Name"  class="form-control shorten"> 
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="emailAddr" placeholder="Email Address"  class="form-control shorten"> 
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="emailSubject" placeholder="Email Subject"  class="form-control shorten"> 
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea rows="10" name="emailBody" class="form-control"></textarea>
                    </div>
                    <div class="button-holder">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4>
              <strong>Curtis L Jenkins</strong>
            </h4>
                    <p>Metropolitan Atlanta, GA</p>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-envelope-o fa-fw"></i>
                            <a href="mailto:curtjenk@comcast.net">curtjenk@comcast.net</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="http://www.linkedin.com/in/curtisljenkins" target="_blank">
                                <i class="fa fa-linkedin-square fa-fw fa-3x"></i>
                            </a>
                        </li>
                        <!-- 
                        <li>
                            <a href="#">
                                <i class="fa fa-twitter fa-fw fa-3x"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-dribbble fa-fw fa-3x"></i>
                            </a>
                        </li> -->
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; David Jonathan Jenkins &amp; Associates, LLC 2016</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
