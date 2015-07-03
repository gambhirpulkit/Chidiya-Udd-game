<?php
include_once '2.1/UserService.php';
include_once '2.1/App42Response.php';
include_once '2.1/App42Log.php';
include_once '2.1/App42BadParameterException.php';
include_once '2.1/App42NotFoundException.php';
include_once '2.1/App42SecurityException.php';
include_once '2.1/App42Exception.php';
include_once '2.1/ServiceAPI.php';

if(isset($_POST["submit"]))
{
$serviceAPI = new ServiceAPI("789961151e1a2932772b9efcbd53b339a00f25c1260eae51ef8cea7dc946d322","53c886cfbf547e430a247b3a47dc783369605bb4b60248002a86bb9df8f7fdd6");
$userService= $serviceAPI->buildUserService();
$userName = $_POST["userName"];
$pwd = $_POST["pwd"];
$emailId = $_POST["email"];

$userService->createUser($userName,$pwd,$emailId);
/* This will create user in App42 cloud and will return User object */
    header("Location: index.html");
}
?>
<!DOCTYPE html>
<html>


<head>

  <meta charset="UTF-8">

  <title>Chidya Udd</title>

    <link rel="stylesheet" href="css/login.css" media="screen" type="text/css" />

</head>

<body>

  <html lang="en-US">
<head>

	<meta charset="utf-8">

	<title>Login</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

	<div id="login">

		<h2><span class="fontawesome-lock"></span>Sign Up</h2>

		<form action="signup.php" method="POST">

			<fieldset>

				<p><label for="User Name">User Name</label></p>
				<p><input name="userName" type="text" placeholder="User Name" style="width:300px;"/>            </p>
				<p><label for="password">Password</label></p>
                <p><input name="pwd" style="width:300px;" placeholder="Password" type="password"></p>
                <p><label for="text">Email Address</label></p>
                <p><input name="email" type="text" required="true" style="width: 300px;" placeholder="mail@example.com"/></p>
                <p><input type="submit" value="Sign Up" name="submit"></p>

			</fieldset>

		</form>

	</div> <!-- end login -->

</body>	
</html>

  <script src='http://codepen.io/assets/libs/fullpage/none.js'></script>

</body>

</html>
