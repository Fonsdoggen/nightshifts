<!doctype html>
<html lang="nl">
<link rel="stylesheet" href="../css/main.css">
<?php
    session_start();
    if(!isset($_SESSION['user_id']))
    {
        $msg = "Je moet eerst inloggen";
        header("Location: admin.php?msg=$msg");
        exit;
    }
?>

<head>
    <title>Admin</title>
</head>

<body onload=display_ct();>
<?php require_once '../views/header.php'; ?>
<div class="center">
<?php
require_once '../config/conn.php';
$query = "SELECT * FROM books";
$statement = $conn->prepare($query);
$statement->execute([]);
$books = $statement->fetchALL(PDO::FETCH_ASSOC);

?>

<div class="article">

<table class="BooksTable">
    <tr>
        <th>Titel</th>
        <th>Auteur</th>
        <th>Beschrijving</th>
        <th>Prijs</th>
        <th>Aantal blz.</th>
        <th>Edit</th>
        
    </tr>
    <?php foreach($books as $book): ?>
    <tr>

        <td><?php echo $book['title'];?></td>
        <td><?php echo $book['author'];?></td>
        <td><?php echo $book['description'];?></td>
        <td><?php echo "&euro;".$book['price'];?></td>
        <td><?php echo $book['page_amount'];?></td>
        <td><?php echo "<a href='controllers/edit.php?id={$book['id']}'>Edit</a>"?></td>

    </tr>
<?php endforeach;?>


</div>
    <?php require_once '../views/footer.php' ?>
</body>
