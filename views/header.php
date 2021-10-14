<?php require_once 'backend/config.php'; ?>
<header onload=display_ct();>
    <div class="logo">
        <a href="<?php echo $base_url; ?>"><img src="img/codecamp.png" alt="CodeCamp Logo"></a>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Songs</button>
        <div class="dropdown-content">
            <a href="<?php echo $base_url; ?>songs/song.php">Songs</a>
            <a href="#">Tools</a>
            <a href="#">etc</a>
        </div>
    </div>
</header>