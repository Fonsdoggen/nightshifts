<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/main.css">
    <title>Film Personages</title>
</head>
<body onload=display_ct();>
    <?php require_once '../views/header.php' ?>
    <div class="grid-container">
        <div class="linkBox">
            <h2>Star Wars</h2>
            <a href="starwars/darth.php">Darth Vader</a> |
            <a href="starwars/luke.php">Luke Skywalker</a>
        </div>
        <div class="linkBox">
            <h2>Acteurs</h2>
            <a href="007/george.php">George Clooney</a> |
            <a href="007/moore.php">Roger Moore</a> |
            <a href="007/timothy.php">Timothy Dalton</a>
        </div>
    </div>
    <?php require_once '../views/footer.php' ?>
</body>
</html>