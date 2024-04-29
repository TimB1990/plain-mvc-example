<table class="data">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Products</th>
            <th>Price</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        echo '<tbody>';
        $data->each(function ($product) {
            echo '<tr>';
            echo '<td>' . $product['product_name'] . '</td>';
            echo '<td>' . $product['category_name'] . '</td>';
            echo '<td>' . $product['description'] . '</td>';
            echo '<td>' . '€ ' .  number_format($product['price'], 2, ',', '.') . '</td>';
            foreach($product['actions'] as $action){
                echo '<td>' . call_user_func_array("setActionBtn", $action);
            }
            echo '</tr>';
        });
        echo '</tbody>';
        ?>
    </tbody>
</table>