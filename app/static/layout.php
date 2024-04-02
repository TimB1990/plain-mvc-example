<link rel="stylesheet" href="../public/css/app.css">
<div class="container">
    <header>
        <h1>My application</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#">Users</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Settings</a></li>
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