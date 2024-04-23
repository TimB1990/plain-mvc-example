<div>
    <nav class="nav-secondary">
        <ul>
            <li><a href="products/create">Add Product</a></li>
            <li class="action" style="float:right;">
                <a href="products" class="button-link <?= ($template == 'default') ? 'active' : '' ?>">
                    <img src="../app/static/icons/format-list-group-default.svg" alt="default-product-list-view">
                </a>
                <a href="products?categories=1" class="button-link <?= ($template == 'byCategory') ? 'active' : '' ?>">
                    <img src="../app/static/icons/format-list-group-plus.svg
                " alt="hierarchy-product-list-view">
                </a>
            </li>
        </ul>
    </nav>

    <div class="main">
        <?php
        require_once '../app/templates/products/' . $template . '.php';
        ?>
    </div>
</div>