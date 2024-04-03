<div>
    <nav class="nav-secondary">
        <ul>
            <li>Add Category</li>
            <li>Add Single Product</li>
        </ul>
    </nav>

    <div style="padding: 1rem;">
        <table>
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