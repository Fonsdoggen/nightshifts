<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Tools</title>
</head>
<body onload=display_ct();>
    <?php require_once'../views/header.php'?>
    <div class="grid-container">
        <div class="linkBox">
            <h2>Gereedschap</h2>
            <a href="tools/handzagen.php">Handzagen</a> | <a href="tools/hamer.php">Hamers</a> | <a href="tools/schroevendraaier.php">Schroevendraaiers</a> |
            <a href="tools/cirkelzagen.php">Cirkelzagen</a>
        </div>
        <div class="linkBox">
            <h2>Boeken</h2>
            <a href="boeken/boek.php">Boeken</a>
        </div>
    </div>
    <?php require_once'../views/footer.php'?>
</body>
</html>