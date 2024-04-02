<h2>Here comes a list of products:</h2>

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