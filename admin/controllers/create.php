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
    <title>Boek Toevoegen</title>

<body class="container-background" onload=display_ct();>
<?php require_once '../../views/header.php'; ?>

<div class="container-admin">
    <form action="../../config/backend/bookcontroller.php" method="POST">
        <div class="form-group">
            <input type="hidden" name="action" value="create">
            <label for="title">Titel:</label>
            <input type="text" name="title" id="title" class="col-25">
        </div>
        <div class="form-group">
            <label for="afdeling">Auteur:</label>
            <input type="text" name="author" id="author" class="col-25">
        </div>
        <div class="form-group">
            <label for="description">Beschrijving:</label>
            <textarea name="description" id="description" cols="30" rows="10" class="col-75"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Prijs:</label>
            <input type="text" id="price" name="price" class="col-25">
        </div>
        <div class="form-group">
            <label for="page_amount">Aantal bladzijdes:</label>
            <input type="text" id="page_amount" name="page_amount" class="col-25">
        </div>
        <input type="submit" class="button" value="Voeg boek toe">
    </form>
</div>

</body>
<?php require_once '../../views/footer.php'; ?>
</html>