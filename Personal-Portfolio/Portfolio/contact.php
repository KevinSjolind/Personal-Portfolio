<?php

if (isset($_POST['submit'])) {

  if (!$_POST['firstName']) {
    $error = "- Please enter your first name.";
  }

  if (!$_POST['lastName']) {
    $error = "<br>- Please enter your last name.";
  }

  if (!$_POST['email']) {
    $error .= "<br>- Please enter your email adress.";
  }

  if (!$_POST['message']) {
    $error .= "<br>- Please enter your message.";
  }
  if (intval($_POST['human']) !== 5) {
      $error .= "<br>- Please verify your not a robot.";
    }

  if ($error) {
    $result = "Please correct the following: $error";
  }

  else {

    mail(
      "kevin.sjolind@optistud.fi",
      "Subject line",
      "Name: " .$_POST['firstName']." ".$_POST['lastName'].
      "\r\nEmail: " .$_POST['email'].
      "\r\nMessage: " .$_POST['message'],
      "Content-type: text/plain; charset=utf-8\r\n"
    );

    {
      $result = "Thank you! I will be in touch shortly.";
    }
  }
}

?>

<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Portfolio</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/portfolio.css" rel="stylesheet">
</head>
<body>

  <nav>
    <a href="index.html">Home</a>
    <a href="projects.html">Projects</a>
    <a href="contact.php">Contact</a>
  </nav>

  <header class="header3">
<img class="logo img-fluid" src="img/logo5.png" alt="error">
  </header>

  <section>
    <h2>Contact Me</h2>
    <div class="projects">

    </div>

    <form class="col-md-4 offset-md-4" method="post">
      <?php echo $result; ?>
      <div class="form-group">
        <input type="text" name="firstName" class="form-control" autofocus placeholder="First name">
      </div>
      <div class="form-group">
        <input type="text" name="lastName" class="form-control" placeholder="Last name">
      </div>
      <div class="form-group">
        <input type="text" name="email" class="form-control" placeholder="Email">
      </div>
      <div class="form-group">
        <textarea class="form-control" name="message" placeholder="Message...." rows="10"></textarea>
      </div>

        <input class="form-control" type="text" name="human" placeholder="What is 3 + 2?">

      <button type="submit" class="btn btn-primary button"  name="submit">Submit</button>
    </form>

    <a href="https://www.instagram.com/kevin_sjolind/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="https://www.facebook.com/kevin.sjolind" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
    <a href="https://github.com/KevinSjolind" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>

  </section>


    <footer>&copy; 2017</footer>

  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
