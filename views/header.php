<header onload=display_ct();>
    <?php require_once 'C:/xampp/htdocs/nightshifts/backend/config.php'; ?>
    <div class="logo">
        <a href="<?php echo $base_url; ?>"><img src="img/codecamp.png" alt="CodeCamp Logo"></a>
    </div>
    <div class="dropdown">
        
            <a href="songs/song.php"><button class="dropbtn">Songs</button></a>
        <div class="dropdown-content">
            <a href="<?php echo $base_url; ?>songs/song.php">Songs</a>
            <a href="#">Tools</a>
            <a href="#">etc</a>
        </div>
    </div>
</header>