<div>
    <nav class="nav-secondary">
        <code>used template: <?= $template ?></code>
        <ul>
            <li><a href="categories/create">Create Category</a></li>
        </ul>
    </nav>

    <div class="main">
        <?php
        require_once '../app/templates/categories/' . $template . '.php';
        ?>
    </div>
</div>