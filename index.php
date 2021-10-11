<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <title>Homepage</title>
</head>



<body onload=display_ct();>
    <?php require_once 'views/header.php'; ?>
    <main>
        <span id='ct' ></span>
    </main>
    <?php require_once 'views/footer.php'; ?>
</body>



<script type="text/javascript"> 
    function display_c(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct()',refresh)
    }

    function display_ct() {
        var x = new Date()
        var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
        x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds();
        document.getElementById('ct').innerHTML = x1;
        display_c();
    }
</script>
</html>