<div>
    <nav class="nav-secondary">
        <ul>
            <li style="color:grey;"><a href="#">Add Category</a></li>
            <li><a href="products/create">Add Single Product</a></li>
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