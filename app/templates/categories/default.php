<table class="data">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Products</th>
            <th colspan="3">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $data->each(function ($category) {
            echo '<tr>';
            echo '<td>' . $category['category_name'] . '</td>';
            echo '<td>' . $category['description'] . '</td>';
            echo '<td>' . $category['product_count'] . '</td>';
            foreach($category['actions'] as $action){
                echo '<td>' . call_user_func_array("setActionBtn", $action);
            }
            // echo '<td style="text-align:center;"><input type="checkbox"/></td>';
            echo '</tr>';
        });
        ?>
    </tbody>
</table>