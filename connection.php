<?php
$db = parse_url(getenv("host=ec2-52-200-155-213.compute-1.amazonaws.com;port=5432;user=jxfpzqqmboccjr;password=193dcc4b2bc8d7048a65e63b33a6e66fd39151f9810fd29083b9f7d020694480;dbname=d2ulfua00e8ep4"));

$pdo = new PDO("pgsql:" . sprintf(
    "host=ec2-52-200-155-213.compute-1.amazonaws.com;port=5432;user=jxfpzqqmboccjr;password=193dcc4b2bc8d7048a65e63b33a6e66fd39151f9810fd29083b9f7d020694480;dbname=d2ulfua00e8ep4",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));

$email = $_POST["Username/Email"];
$passcode = $_POST["Password"];
echo 'email: '.$email.'<br>';
echo 'password: '.$passcode.'<br>';

$result = $pdo->query('SELECT username, password FROM logininfo WHERE username = :username AND password = :password');
$result->bindValue('username', $email);
$result->bindValue('password', $passcode);
if ($result->rowCount() > 0){
    $row = $result->fetch(PDO::FETCH_ASSOC);
    echo $email.'  Real Username: '.$row['username'].'<br>';
    echo $passcode.'   Real Password   '.$row['password'].'<br>';
    if($row['username'] == $email && $row['password'] == $passcode){
      // Correct username and password, logged in	
      header('Location: IdeasPages/IdeasPage.php');
      die();
        
      echo 'correct';
    }
      else {
      // Incorrect password
      //$_SESSION["error"] = 'Incorrect username and/or password!';
      //header('Location: loginPage.html');
      
    }
  } 
?>