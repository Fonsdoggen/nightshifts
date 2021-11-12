<!doctype html>
<html lang="nl">
<link rel="stylesheet" href="../css/main.css">

<head>
    <title>Log In</title>
    

</head>
<?php require_once '../views/header.php'; ?>

<body onload=display_ct();>
    
<div class="container-admin">
    

    <form action="../config/backend/loginController.php" method="POST">
        <div class="form-group">
        <label for="username">Gebruikersnaam:</label>
        <input type="text" name="username" id="username">
        </div>
        <div class="form-group">
        <label for="password">Wachtwoord:</label>
        <input type="password" name="password" id="password">
        </div>
        <input type="submit" class="button" value="Login">
    </form>
</div>

</body>
<?php require_once '../views/footer.php' ?>
</html>