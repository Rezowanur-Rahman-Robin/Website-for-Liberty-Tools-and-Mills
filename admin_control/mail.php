<?php

  if (isset($_POST['submit'])) {
	  
	  
    $name = $_POST['name'];
    $email = $_POST['email'];



    require 'mail/PHPMailerAutoload.php';
        
    $subject = $_POST['subject'];
    $body = "<h2 align='center'>Dear,</h2>
    <h1 align='center'> Thank you so much for getting yourself registered for </h1>
    
    <h2 align='center'> The exam will start at  .So,get yourself prepared. </h2>
    <h1 align='center'> Do no miss the great opportunity!</h1>";

       

   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 587; // or 465,587
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'tls';
 
   $mail ->Username = "captainsquad2000@gmail.com";
   $mail ->Password = "captainchamp2000gmail";

   $mail ->setFrom('captainsquad2000@gmail.com');
   $mail ->addAddress('robincuetcse@gmail.com');
   $mail ->addReplyTo('captainsquad2000@gmail.com');


   $mail ->IsHTML(true);
   $mail ->Subject = $subject;
   $mail ->Body =$body;
  

   if(!$mail->send())
   {
       echo "<script>alert('Mail sending failed.')</script>";
       
   
   }
   else
   {
     echo "<script>alert('Mail has been sent.')</script>";
       
    
   }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us Using PHPMailer & Gmail SMTP</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
</head>

<body class="bg-info">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 mt-3">
        <div class="card border-danger shadow">
          <div class="card-header bg-danger text-light">
            <h3 class="card-title">Contact Us</h3>
          </div>
          <div class="card-body px-4">
            <form action="index.php" method="POST">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name"  class="form-control" placeholder="Enter Name" required>
              </div>
              <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="email" name="email"  class="form-control" placeholder="Enter E-Mail" required>
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" name="subject" class="form-control" placeholder="Enter Subject"
                  required>
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" rows="5" class="form-control" placeholder="Write Your Message"
                  required></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send" class="btn btn-danger btn-block">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>


