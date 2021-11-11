
<!doctype html>
<html lang="nl">
<link rel="stylesheet" href="../../css/main.css">
<?php
session_start();
if(!isset($_SESSION['user_id']))
{
    $msg = "Je moet eerst inloggen";
    header("Location: ../admin.php?msg=$msg");
    exit;
}
?>
<head>
    <title>Edit</title>

</head>

<body onload=display_ct();>
<?php require_once '../../views/header.php'; ?>
<div class="center">
    <main>
        <?php

        $id = $_GET['id'];

        require_once '../../config/conn.php';
        $query = "SELECT * FROM books WHERE id = :id";
        $statement=$conn->prepare($query);
        $statement->execute([":id"=>$id]);
        $item=$statement->fetch(PDO::FETCH_ASSOC);
        ?>
        <div class="form-edit">
            <form action="../../config/backend/bookController.php" method="POST">

                <input type="hidden" name="action" value="update">
                <input type="hidden" name= "id" class="textbox" value="<?php echo $id;?>"> <br>
                <input type="text" name="title" class="textbox" value="<?php echo $item['title'];?>"> <br> <br>

                <input type="text" name="author" class="textbox" value="<?php echo $item['author'];?>"> <br> <br>
                <input type="text" name="description" class="textbox" value="<?php echo $item['description'];?>"> <br> <br>
                <input type="text" name="price"  class="textbox" value="<?php echo $item['price'];?>"> <br> <br>
                <input type="text" class="textbox" name="page_amount" value="<?php echo $item['page_amount'];?>"> <br> <br>

                <input type="submit" class="button" value="Veranderen"> <br> <br>

            </form>
            <form action="../../backend/bookController.php" method="POST">

                <input type="hidden" name="action" value="delete">
                <input type="hidden" name="id" value="<?php echo $item['id'];?>">
                <input type="submit" class = "button" value="Verwijderen">
            </form>
        </div>

    </main>
<?php require_once '../../views/footer.php'; ?>
</body>
</html>

