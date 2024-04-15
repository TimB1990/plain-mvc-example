<div>
    <nav class="nav-secondary">
        <ul>
            <li style="color:grey;"><a href="#">Add Category</a></li>
            <li><a href="products/create">Add Single Product</a></li>
            <li style="float:right;">
                <a href="products" class="button-link">
                    <img src="../app/static/icons/format-list-group-default.svg" alt="default-product-list-view">
                </a>
                <a href="products?categories=1" class="button-link">
                    <img src="../app/static/icons/format-list-group-plus.svg
                " alt="hierarchy-product-list-view">
                </a>
            </li>
        </ul>
    </nav>

    <div class="main">
        <table class="data">
            <?php
            require_once '../app/templates/products/' . $template . '.php';
            ?>
        </table>
    </div>
</div>