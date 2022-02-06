<?php
$db = parse_url(getenv("ec2-52-200-155-213.compute-1.amazonaws.com"));

$pdo = new PDO("pgsql:" . sprintf(
    "host=ec2-52-200-155-213.compute-1.amazonaws.com;port=5432;user=jxfpzqqmboccjr;password=193dcc4b2bc8d7048a65e63b33a6e66fd39151f9810fd29083b9f7d020694480;dbname=d2ulfua00e8ep4",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["password"],
    ltrim($db["dbname"], "/")
));

$email = $_POST["email"];
$password = $_POST["password"];
$u = 'SELECT username, passcode FROM logininfo';
$result = $pdo->query($pdo, $u);
if (mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    if($row['username'] == $email && $row['passcode'] == $password){
      // Correct username and password, logged in	
      //header('Location: Home Page/HomePage.html');
      //die();
      echo 'correct';
    }
      else {
      // Incorrect password
      //$_SESSION["error"] = 'Incorrect username and/or password!';
      //header('Location: loginPage.php');
      echo 'incorrect';
    }
  } 
?>