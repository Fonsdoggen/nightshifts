<header>
    <?php
    //    ifstatement, omdat thomas niet op C-schrijf werkt!
    if (file_exists('C:/laragon/www/nightshifts/backend/config.php')) {
        require_once 'C:/laragon/www/nightshifts/backend/config.php';
    }
    else {
        require_once 'S:/help/laragon/www/nightshifts/backend/config.php';
    }
    // ifstatement om sesion te starten als hij nog niet bestaat
    if(session_id() == '' || !isset($_SESSION) || session_status() === PHP_SESSION_NONE) {
        // session isn't started
        session_start();
    }
    ?>
    <div class="logo">
        <a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url; ?>img/HeaderLogo.png" alt="CodeCamp Logo"></a>
    </div>
    <div class="nav">
        <a href="<?php echo $base_url; ?>"><button class="dropbtn <?php if (strpos($_SERVER['REQUEST_URI'], ".php") == false){echo "active";} ?>">Home</button></a>
        <a href="<?php echo $base_url; ?>songs/song.php"><button class="dropbtn <?php if (strpos($_SERVER['REQUEST_URI'], "nightshifts/songs") !== false){echo "active";} ?>">Songs</button></a>
        <a href="<?php echo $base_url; ?>wiki/tool.php"><button class="dropbtn <?php if (strpos($_SERVER['REQUEST_URI'], "nightshifts/wiki") !== false){echo "active";} ?>">Wiki</button></a>
        <a href="<?php echo $base_url; ?>dranken/drank.php"><button class="dropbtn <?php if (strpos($_SERVER['REQUEST_URI'], "nightshifts/dranken") !== false){echo "active";} ?>">Dranken</button></a>
        <a href="<?php echo $base_url; ?>acters/personages.php"><button class="dropbtn <?php if (strpos($_SERVER['REQUEST_URI'], "nightshifts/acters") !== false){echo "active";} ?>">Movies</button></a>
        <?php
        if(isset($_SESSION['user_id']))
        {
            if (strpos($_SERVER['REQUEST_URI'], "admin/controllers") !== false)
            {
                echo "<a class='dropbtn active' href='{$base_url}admin/controllers/index.php'>Admin</a>";
            }
            else
            {
                echo "<a class='dropbtn' href='{$base_url}admin/controllers/index.php'>Admin</a>";
            }
        }
        else
        {
            if (strpos($_SERVER['REQUEST_URI'], "admin/admin.php") !== false)
            {
                echo "<a class='dropbtn active' href='{$base_url}admin/admin.php'>Log in</a>";
            }
            else
            {
                echo "<a class='dropbtn' href='{$base_url}admin/admin.php'>Log in</a>";
            }
        }
        ?>
        <?php
        if(isset($_SESSION['user_id']))
        {
            echo "<a class='dropbtn' href='{$base_url}admin/logout.php'>Log uit</a>";
        }
        ?>

        <!-- <a href="javascript:history.go(-1)"><button class="dropbtn">Terug</button></a> -->
    </div>
    <span id='ct' ></span>
</header>

<script type="text/javascript"> 
    function display_c(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct()',refresh)
    }

    function display_ct() {
        var audio = new Audio("../img/Test.mp3");
        audio.play();
        var x = new Date()

        // date part ///
        var month=x.getMonth()+1;
        var day=x.getDate();
        var year=x.getFullYear();
        if (month <10 ){month='0' + month;}
        if (day <10 ){day='0' + day;}
        var x3= month+'-'+day+'-'+year;
        
        // time part //
        var hour=x.getHours();
        var minute=x.getMinutes();
        var second=x.getSeconds();
        if(hour <10 ){hour='0'+hour;}
        if(minute <10 ) {minute='0' + minute; }
        if(second<10){second='0' + second;}
        var x3 = x3 + ' ' +  hour+':'+minute+':'+second

        document.getElementById('ct').innerHTML = x3;
        display_c();
    }
</script>


