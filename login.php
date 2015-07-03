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
    //$userName = $_POST["userName"];
    $pwd = $_POST["pwd"];
    $emailId = $_POST["email"];

    $user= $userService->authenticate($emailId, $pwd);
    if($user)
    {
        header(" Location: index.html");
    }
    /* This will create user in App42 cloud and will return User object */
    //header("final.html");
}
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Login Form</title>

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

		<h2><span class="fontawesome-lock"></span>Sign In</h2>

		<form action="" method="POST">

			<fieldset>

				<p><label for="email">E-mail address</label></p>
				<p><input type="email" id="email" value="mail@address.com" onBlur="if(this.value=='')this.value='mail@address.com'" onFocus="if(this.value=='mail@address.com')this.value=''" name="email"></p> <!-- JS because of IE support; better: placeholder="mail@address.com" -->

				<p><label for="password">Password</label></p>
				<p><input type="password" id="password" value="password" onBlur="if(this.value=='')this.value='password'" onFocus="if(this.value=='password')this.value=''" name="pwd"></p> <!-- JS because of IE support; better: placeholder="password" -->

				<p><input type="submit" value="Sign In" name="submit"></p>

			</fieldset>

		</form>

	</div> <!-- end login -->

</body>	
</html>

  <script src='http://codepen.io/assets/libs/fullpage/none.js'></script>

</body>

</html>
