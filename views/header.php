<header onload=display_ct();>
    <?php require_once 'C:/xampp/htdocs/nightshifts/backend/config.php'; ?>
    <div class="logo">
        <a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url; ?>img/codecamp.png" alt="CodeCamp Logo"></a>
    </div>
    <div class="dropdown">
        
            <a href="<?php echo $base_url; ?>"><button class="dropbtn">Home</button></a>
        <div class="dropdown-content">
            <a href="<?php echo $base_url; ?>songs/song.php">Songs</a>
            <a href="#">Tools</a>
            <a href="#">Dranken</a>
        </div>
    </div>
</header>