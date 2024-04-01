<?php
$currentView = $view;
?>
<link rel="stylesheet" href="../public/css/app.css">
<div>
    <header>
        <h1>TEST</h1>
    </header>

    <?php
    require_once '../app/views/' . $view . '.php';
    ?>

    <footer>
        <h3>© 2024</h3>
    </footer>
</div>