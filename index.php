<html>

<head>
	<meta charset="utf-8">
	<title>Registration form</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="start">

<div class="auth_false">
<center><h1>Application for registration and authorization</h1><br>
<a href="registration/registration.php">Registration</a><br>
<a href="authorization/authorization.php">Authorization</a><br></center>
<?php
if (($_SESSION[key_session] == md5($login) . md5($_COOKIE['key_cookie']) . md5($password)) ||
	($_COOKIE["key_cookie"] == md5($_SERVER['REMOTE_ADDR']) . md5($_SERVER['HTTP_USER_AGENT'])))
$_SESSION[auth_true] = 'true'; ?>
</div>

<div class="auth_true">
<h2>Hello, <?php echo $_SESSION[name] ?></h2>

</div>


</body>