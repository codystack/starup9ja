<?php 
session_start();
include('../controllers/dbconnect.php');

if (isset($_POST['message'])) {
    
    $fullName            = $_POST['fullName'];
    $brandName           = $_POST['brandName'];
    $email               = $_POST['email'];
    $phoneNum            = $_POST['phoneNum'];
    $comment             = $_POST['comment'];
	$errors              = array();

    // receive all input values from the form
    $fullName        = mysqli_real_escape_string($con, $_POST['fullName']);
    $brandName       = mysqli_real_escape_string($con, $_POST['brandName']);
    $email           = mysqli_real_escape_string($con, $_POST['email']);
    $phoneNum        = mysqli_real_escape_string($con, $_POST['phoneNum']);
	$comment         = mysqli_real_escape_string($con, $_POST['comment']);


  
        $query = "INSERT INTO messages (fullName, brandName, email, phoneNum, comment) 
				  VALUES('$fullName', '$brandName', '$email', '$phoneNum', '$comment')";
        mysqli_query($con, $query);
        $_SESSION['email'] = $email;
        $_SESSION['success'] = header("Location: contactsuccess");
      exit();

  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Contact Us :: StarUp 9ja&trade;</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="https://i.imgur.com/Ek7KKbW.png">
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/registration-form-1.jpg" alt="">
				</div>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
					<h3>CONTACT US</h3>
					<div class="form-wrapper">
						<input type="text" name="fullName" required placeholder="Full Name" class="form-control">
					</div>
                    <div class="form-wrapper">
                        <input type="text" name="brandName" required placeholder="Brand Name" class="form-control">
                    </div>
					<div class="form-wrapper">
						<input type="email" name="email" required placeholder="Email" class="form-control">
					</div>
                    <div class="form-wrapper">
                        <input type="tel" name="phoneNum" required placeholder="Phone No" class="form-control">
                    </div>
					<div class="form-wrapper">
						<textarea name="comment" required placeholder="Drop your message here" class="form-control"></textarea>
					</div>
					<button type="submit" name="message">Send Message
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
                    <p style="text-align: center; padding-top: 20px">You can also call<br> <a href="tel:+234 7082486557" style="text-decoration: none; font-size: large; color: #0a183d">+234 7082486557</a> <br>or mail  <a href="mailto:info@starup9ja.com" style="text-decoration: none; font-size: large; color: #0a183d">info@starup9ja.com</a> </p>
				</form>

			</div>
		</div>
		
	</body>
</html>
