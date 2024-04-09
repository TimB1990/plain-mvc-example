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
            $data->each(function ($product) {
                echo '<tr>';
                echo '<td>' . $product['product_name'] . '</td>';
                echo '<td>' . $product['description'] . '</td>';
                echo '<td>' . '€ ' .  $product['price'] . '</td>';
                echo '</tr>';
            });
            ?>
        </table>
    </div>
</div>