<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style-php.css">
</head>

<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-4">

        </div>

        <div class="col-sm-4">
        <div class="login_form">
 	<form action="login_process.php" method="POST">
  <div class="form-group">
                <img src="logo.svg" alt="logo" class="logo">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                    <!-- <div id="emailHelp" class="form-text">secured by hashing.</div> -->
                </div>
                <button type="submit" class="form_btn btn-primary">sign in</button>
            </form>
            <p style="font-size: 12px; text-align: center; margin-top: 10px;"><a href="forgot_password.php" style="color: #00376b;">Forgot password?</a></p>
            <p style="text-align: center;">Don't have an account? <a href="signup.php">Sign up</a></p>
            </div>
        </div>

        <div class="col-sm-4">

        </div>
    </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

</html>