<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

$login = trim(htmlspecialchars(stripslashes($_POST['login']))); 
$password = trim(htmlspecialchars(stripslashes($_POST['password'])));
$confirm_password = trim(htmlspecialchars(stripslashes($_POST['confirm_password'])));
$email = trim(htmlspecialchars(stripslashes($_POST['email']))); 
$name = trim(htmlspecialchars(stripslashes($_POST['name'])));



$_SESSION[error_request_handler] = $error_request_handler;
$_SESSION[login] = $login;
$_SESSION[password] = $password;
$_SESSION[confirm_password] = $confirm_password;
$_SESSION[email] = $email;
$_SESSION[name] = $name;



if (iconv_strlen($login) == 0)
	$error_request_handler = 'Login is empty';
else if (iconv_strlen($password) == 0)
	$error_request_handler = 'Password is empty';
else if (iconv_strlen($email) == 0)
	$error_request_handler = 'E-mail is empty';
else if (iconv_strlen($name) == 0)
	$error_request_handler = 'Name is empty';



if ($password != $confirm_password) 
	$error_request_handler = 'Passwords are not match;
else {
	$sault = GenerateRandomString();
       	$password = md5($password) . $sault; 
}



//unique
curl -v\
  -H "X-Collection-Name: My Collection" \
  -H "X-Master-key: <$2b$10$xltI0B5bzy.E9u30TZX28OuCRmc38AQWpcf.1Kw4gB651bwqu1uEy>" \
  --request POST \
    https://api.jsonbin.io/v3/c

    "record": "<RECORD_ID>",
  "metadata": {
    "createdAt": "<DATE/TIME>",
    "name": "<true/false>"

    "message": "<Error Message>"





if (iconv_strlen($error_request_handler) == 0) { //если нет ошибок пишем в jsonl
	


$jsonbin = new DomDocument('1.0', 'utf-8');
$jsonbin->load(db.json);

$db_json = $jsonbin->getElementsByTagName('db')->item(0);
	$db_json = $db_json->appendChild($jsonbin->createElement('db'));
	
	//$db_json->setAttribute("email", "$email");
	
		$login_json = $db_json->appendChild($jsonbin->createElement('login'));
		$password_json = $db_json->appendChild($jsonbin->createElement('password'));
		$email_json = $db_json->appendChild($jsonbin->createElement('email'));
		$name_json = $db_json->appendChild($jsonbin->createElement('name'));
		
		
		$login_json->appendChild($jsonbin->createTextNode("$login"));
		$password_json->appendChild($jsonbin->createTextNode("$password"));
		$email_json->appendChild($jsonbin->createTextNode("$email"));
		$name_json->appendChild($jsonbin->createTextNode("$name"));
		
		
		
		
$jsonbin->formatOutput = true;
$jsonbin->save('db.json');


header('Location: ..\authorization\authorization.php');

} else 




header('Location: registration.php');







?>
