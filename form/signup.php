<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup combilinkDB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style-php.css">
</head>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
    </div>
     <div class="col-sm-4">
        <br>
        <br>
      <img src="logo.svg" alt="Techno Smarter" class="logo img-fluid"> 
    </div>
     <div class="col-sm-4">
    </div>
  </div>
	<div class="row">
        <div class="col-sm-4">

        </div>
		<div class="col-sm-4">
    <!-- <div class="successmsg"><span style="font-size:100px;">&#9989;</span> <br> You have registered successfully . <br> <a href="login.php" style="color:#fff;">Login here... </a> </div> -->
       <div class="signup_form">
		<form action="" method="POST">
  <div class="form-group">
  	
        <label class="label_txt">First Name</label>
    <input type="text" class="form-control" name="fname" value="" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Last Name </label>
    <input type="text" class="form-control" name="lname" value="" required="">
  </div>
 
<div class="form-group">
    <label class="label_txt">Username </label>
    <input type="text" class="form-control" name="username" value="" required="">
  </div>

<div class="form-group">
    <label class="label_txt">Email </label>
    <input type="email" class="form-control" name="email" value="" required="">
  </div>

  <div class="form-group">
    <label class="label_txt">facebook </label>
    <input type="link" name="facebook" class="form-control" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">instagram </label>
    <input type="link" name="instagram" class="form-control" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">linkedin </label>
    <input type="link" name="linkedin" class="form-control" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">twitter </label>
    <input type="link" name="twitter" class="form-control" required="">
  </div>
  <div class="form-group">
    <label class="label_txt">Password </label>
    <input type="password" name="password" class="form-control" required="">
  </div>
   <div class="form-group">
    <label class="label_txt">Confirm Password </label>
    <input type="password" name="passwordConfirm" class="form-control" required="">
  </div>
  <br>
  <button type="submit" name="signup" class="btn btn-primary btn-group-lg form_btn">SignUp</button> <br>
   <p>Have an account?  <a href="login.php">Log in</a> </p>
</form>
</div>
		</div>
		<div class="col-sm-4">
		</div>
        </div>
	</div>
</div> 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</html>