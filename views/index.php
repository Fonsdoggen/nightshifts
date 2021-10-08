<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <title>Homepage</title>
</head>
<header>
    <?php require_once 'header.php'; ?>
</header>

<body>
    <h1>The date and time: <span id="datetime"></span></h1>
</body>

<footer>
    <?php require_once 'footer.php'; ?>
</footer>

<script>
    var dt = new Date();
    document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>
</html>