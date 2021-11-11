<?php


session_start();

$username = $_POST['username'];
$password = $_POST['password'];

require_once '../conn.php';

$query = 'SELECT * FROM users WHERE username = :username';

$statement = $conn->prepare($query);

$statement->execute([
    ":username" => $_POST['username']
]);

$user = $statement->fetch(PDO::FETCH_ASSOC);

if($statement->rowCount() < 1)
{
     die("Dit account bestaat niet");
}

if(!password_verify($password,$user['password']))
{
    die("Error: WACHTWOORD NIET JUIST!!!!!!!!!!!!");
}

$user_id = $user['id'];

$_SESSION['user_id'] = $user_id;

header("Location: ../../admin/index.php");