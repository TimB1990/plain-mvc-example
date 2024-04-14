<?php
$data->each(function ($product) {
    echo '<tbody>';
    echo '<tr>';
    echo '<td>' . $product['product_name'] . '</td>';
    echo '<td>' . $product['category_name'] . ' (' . $product['category_id'] . ')' . '</td>';
    echo '<td>' . $product['description'] . '</td>';
    echo '<td>' . '€ ' .  number_format($product['price'], 2, ',', '.') . '</td>';
    echo '</tr>';
    echo '</tbody>';
});
