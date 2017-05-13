<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$from = 'Contact Form';
$to = 'hallambertarchitecture@yahoo.com';
$subject = 'Message From Contact Form';
$body = "From: $name\n E-Mail: $email\n Phone: $phone\n Message:\n $message";
//validations
if (!$_POST['name']) {
  $errName = 'Please enter your name';
}
if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
  $errEmail = 'Please enter a valid email address';
}
if (!$_POST['phone']){
  $errPhone = 'Please enter your phone number';
}
if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}




// If there are no errors, send the email
if (!$errName && !$errEmail && !$errPhone && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
}
}
 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Hal Lambert Architecture, Vero Beach Architect Portfolio</title>
      <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="hlacss5.css">
        <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
        <link rel="icon" href="hllogo.ico" type="image/x-icon"/>
  <link rel="shortcut icon" href="hllogo.ico" type="image/x-icon"/>
  </head>
  <body>
    <div id="portfolioheader" class="container-fluid">
          <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="navbar-brand-home"> <a href="index.html"> Home</a></div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                      <li><a class="btn btn-primary btn-medium" href="contact.php">Contact</a></li>
                      <li><a href="aboutme.html">About <i class="navigationtext" aria-hidden="true"></i></a></li>
                      <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="CustomHomes.html">Custom Homes</a></li>
                <li><a href="MultiFamilyHomes.html">Multi-Family</a></li>
                <li><a href="officebuildings.html">Office Buildings</a></li>
                <li><a href="CurrentProjects.html">Current Projects</a></li>
              </ul>
            </li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
          </div>
        </nav>


    <h1 class="portfoliotagline">Contact Hal Lambert Architecture and Construction</h1>
    </div>


    <hr>









    <div class="container-fluid" id= "contactForm">
        <div class="row">
          <div class ="col-md-3">
            <div class="thumbnail">
              <img src ="contactpage.jpg">
</div>
          </div>
          <div class="col-md-9">


      <form class="form-horizontal" role="form"  method="POST" action="contact.php">
        <div class="form-group">
          <label for="name" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
              <?php echo "<p class='text-danger'> $errName </p>"; ?>
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'> $errEmail </p>"; ?>
          </div>
        </div>
        <div class="form-group">
          <label for="phone" class="col-sm-2 control-label">Phone Number</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your Phone Number" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
            <?php echo "<p class='text-danger'> $errPhone </p>"; ?>
          </div>
        </div>
        <div class="form-group">
          <label for="message" class="col-sm-2 control-label">Message</label>
          <div class="col-sm-10">
              <textarea class="form-control" rows="4" name="message" placeholder="Your Message"><?php echo htmlspecialchars($_POST['message']); ?></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
     <button id="submit" name="submit" type="submit" value="Send" class="btn btn-default"> Submit</button>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>
          </div>
        </div>
      </form>
      </div>
        </div>
      </div>
      <hr>

         <div id="address">
        <ul>
          <li>  Hal Lambert Architecture & Construction
  2935 20th St.
  Vero Beach, FL 32960</li>
          <li>Tel: 772-469-3101</li>
          <li>email:  hallambertarchitecture@yahoo.com</li>
        </ul>
      </div>
<div id="logo-contact-page">
<img src="./HLAFinal/HL LOGO BLUE.JPG">
</div>





      <footer class="navbar-default navbar-fixed-bottom">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="mainv3.html"class="navbar-brand">Hal Lambert</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                    <li><a class="btn btn-primary btn-medium" href="contact.html">Contact</a></li>
                    <li><a href="aboutme.html">About <i class="navigationtext" aria-hidden="true"></i></a></li>
                    <li class="dropup">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="singlefamily2.html">Single Family</a></li>
              <li><a href="multifamily.html">Multi-Family</a></li>
              <li><a href="commercial.html">Commercial</a></li>
            </ul>
          </li>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
        </div>
      </footer>


    <script
    src="https://code.jquery.com/jquery-3.1.1.js">
    </script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <script src="singlefamily.js"></script>
    </body>
    </html>

