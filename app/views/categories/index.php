<div>
    <nav class="nav-secondary">
        <ul>
            <li><a href="categories/create">Create Category</a></li>
        </ul>
    </nav>

    <div class="main">
        <table class="data">
            <?php
            require_once '../app/templates/categories/' . $template . '.php';
            ?>
        </table>
    </div>
</div>