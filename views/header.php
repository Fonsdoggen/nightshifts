<header>
    <?php require_once 'C:/xampp/htdocs/nightshifts/backend/config.php'; ?>
    <div class="logo">
        <a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url; ?>img/codecamp.png" alt="CodeCamp Logo"></a>
    </div>
    <div class="dropdown">
        
        <a href="<?php echo $base_url; ?>"><button class="dropbtn">Home</button></a>
        <div class="dropdown-content">
            <a href="<?php echo $base_url; ?>songs/song.php">Songs</a>
            <a href="<?php echo $base_url; ?>tools/tool.php">Tools</a>
            <a href="<?php echo $base_url; ?>dranken/drank.php">Dranken</a>
        </div>
    </div>
    <span id='ct' ></span>
</header>

<script type="text/javascript"> 
    function display_c(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct()',refresh)
    }

    function display_ct() {
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
