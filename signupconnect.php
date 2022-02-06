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

$username = $_POST['Username'];
$password = $_POST['Password'];
$email = $_POST['Email'];

$sql->query("INSERT INTO logininfo (username, password, email) VALUES (:username, :password, :email)");
$sql->bind('username', $username);
$sql->bind('password', $password);
$sql->bind('email', $email);
$sql->execute();


?>