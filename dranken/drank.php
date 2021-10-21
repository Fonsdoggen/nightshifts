<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Dranken</title>
</head>
<body onload=display_ct();>
    <?php require_once'../views/header.php' ?>
    <div class="grid-container">
        <div class="linkBox">
            <h2>Frisdranken</h2>
            <a href="frisdranken/frisdrank.php">Cola, Sinas en 7Up</a>
        </div>
        <div class="linkBox">
            <h2>Warme dranken</h2>
            <a href="warmedranken/warmdrank.php">Koffie, latte en thee</a>
        </div> 
    </div>
    <?php require_once'../views/footer.php' ?>
</body>
</html>