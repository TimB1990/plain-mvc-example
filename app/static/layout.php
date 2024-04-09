<link rel="stylesheet" href="<?= PROJECT_ROOT ?>/css/app.css">

<!-- <div id="dialog">
    <div class="content">
        <h1>HI THERE</h1>
    </div>
</div> -->

<div class="container">
    <header>
        <h1>My application</h1>
    </header>

    <nav>
        <ul>
            <li class="<?= $view == 'users/index' ? 'active' : '' ?>"><a href="<?= PROJECT_ROOT ?>/users">Users</a></li>
            <li class="<?= $view == 'products/index' ? 'active' : '' ?>"><a href="<?= PROJECT_ROOT ?>/products">Products</a></li>
            <li class="<?= $view == 'settings/index' ? 'active' : '' ?>"><a href="<?= PROJECT_ROOT ?>/settings">Settings</a></li>
        </ul>
    </nav>

    <div id="content" slot="content">
        <?php
        require_once '../app/views/' . $view . '.php';
        ?>
    </div>

    <footer>
        <h3>© 2024</h3>
    </footer>
</div>