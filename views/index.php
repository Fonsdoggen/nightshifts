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
    <h1 id="clock"></h1>
</body>

<footer>
    <div class="contact">
            <p>©</p>
            <p>telefoonnummer</p>
            <p>Locatie</p>
        </div>   
</footer>

<script type="text/javascript">
    var clockElement = document.getElementById('clock');

    function clock() {
        clockElement.textContent = new Date().toString();
    }

    setInterval(clock, 100);
</script>
</html>