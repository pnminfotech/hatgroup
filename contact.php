<?php
if(isset($_POST['submit'])) {
$statusMsg='';

    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
  
$fromemail =  "HAT GROUP's";

$email_message = 'This mail is being send from Hat Group Website
                    Name: '.$name.'
                    Email: '.$email.'				
                    Message: '.$message.'';
//$email_message.="Please find the attachment";
$semi_rand = md5(uniqid(time()));
$headers = "From: ".$fromemail;
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
 
    $headers .= "\nMIME-Version: 1.0\n" .
    "Content-Type: multipart/mixed;\n" .
    " boundary=\"{$mime_boundary}\"";
 
/*if($_FILES["file"]["name"]!= ""){  
 $strFilesName = $_FILES["file"]["name"];  
 $strContent = chunk_split(base64_encode(file_get_contents($_FILES["file"]["tmp_name"])));  
 
 
    $email_message .= "This is a multi-part message in MIME format.\n\n" .
    "--{$mime_boundary}\n" .
    "Content-Type:text/html; charset=\"iso-8859-1\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" .
    $email_message .= "\n\n";
 
 
    $email_message .= "--{$mime_boundary}\n" .
    "Content-Type: application/octet-stream;\n" .
    " name=\"{$strFilesName}\"\n" .
    //"Content-Disposition: attachment;\n" .
    //" filename=\"{$fileatt_name}\"\n" .
    "Content-Transfer-Encoding: base64\n\n" .
    $strContent  .= "\n\n" .
    "--{$mime_boundary}--\n";
}*/
$toemail="write@hatgroup.in"; 
 
if(mail($toemail, $subject, $email_message, $headers)){
   
    echo '<script language="javascript">';
    echo 'window.alert("Thank You!");';
    echo '</script>';
	}
	else
	{
	echo '<script language="javascript">';
    echo 'window.alert("Mail not send");';
    echo '</script>';
	}
}
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Furniture Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Furniture, Table, Office-furniture">
  <meta name="description" content="Online Furniture at Low Cost">
  <link rel="stylesheet" type="text/css" href="fonts/googlefont.css">
  <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="assets/css/style.css"  type="text/css"  rel="stylesheet" />
<style>


</style>
  </head>
<body>

<!-- NAVBAR -->
      <?php include 'header.html';?>
<!-- End Navbar 


<div class="container">
<div class="row">
  <div  class="carousel">
    <!-- Indicators 
    <div class="">
      <div class="item ">
        <img src="assets/image/product/living/b1.png" alt="Furniture" style="width:100%;opacity:0.4">
      </div>
    </div>
  </div>
</div>
</div>
-->
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-48">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Contact Us</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
        
              <li class="active">Contact</li>
            </ul>
          </div>
          <div class="box-position bred_img" style="background-image:url('assets/image/product/office/desk3.jpg');"></div>
        </div>
      </section>


 <section class="section contact section-xl bg-default text-center mt-5"> 
        <div class="container isotope-wrap">       
             
            <!--     <h1 class="mx-auto m-3 text-center">SHOP BY CATEGORY</h1> -->
           
          <div class="row row-30 isotope" >
          
   <!-- ======= Contact Section ======= -->

    





          <div class="col-lg-8">
            <form action="" method="post" role="form" class="php-email-form">
			   <h3 style="padding-bottom: 9px;">Let's Connect</h3>
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="submit" >Send Message</button></div>
            </form>
          </div>
          
        <div class="col-lg-4">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="fas fa-map-marker-alt"></i>
                  <h3>Our Branch</h3>
                  <p>Pune, Banglore,Indore </p>
                </div>
              </div>
              <div class="col-md-12">
                <div class="info-box">
                  <i class="fas fa-envelope"></i>
                  <h3>Email Us</h3>
                  <p>write@hatgroup.in</p>
                </div>
              </div>
              <div class="col-md-12">
                <div class="info-box">
                  <i class="fas fa-phone"></i>
                  <h3>Call Us</h3>
                  <p>+91 86188 32178</p>
                </div>
              </div>
            </div>

          </div>


     

       
   
            
      </div>
        </div>
      </section>
      
      

<?php include 'footer.php';?>
  
 <script src="assets/counter/script.js"></script>
 <script src="assets/bootstrap/jquery.min.js"></script>
 <script src="assets/bootstrap/bootstrap.min.js"></script>
</body>
</html>