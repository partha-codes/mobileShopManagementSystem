<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <hgroup>
  <h1>Login Form</h1>
</hgroup>
<form name="form1" method="post" action="checklogin.php">
  <div class="group">
    <input type="text" id="myusername" name="myusername"><span class="highlight"></span><span class="bar"></span>
    <label>Username</label>
  </div>
  <div class="group">
    <input type="password" id="mypassword" name="mypassword"><span class="highlight"></span><span class="bar"></span>
    <label>Password</label>
  </div>
  <button type="submit" name="Submit" class="button buttonBlue">Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
