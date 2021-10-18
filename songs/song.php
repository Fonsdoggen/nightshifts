<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <title>Songteksten en Artiesten</title>
</head>
<body onload=display_ct();>
    <?php require_once'../views/header.php'?>
    <div class="grid-container">
        <div class="songs">
            <h2>Queen</h2>
            <a href="queen/rhapsody.php">Bohemian rhapsody songtekst</a> |
            <a href="queen/killer.php">Killer queen songtekst</a>
        </div>
        <div class="songs">
            <h2>Muse</h2>
            <a href="muse/madness.php">Madness songtekst</a>
        </div>
    </div>
    <?php require_once'../views/footer.php'?>
</body>
</html>