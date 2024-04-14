<div>
    <form method="POST" action=<?= PROJECT_ROOT . "/products/store" ?>>
        <table>
            <tr>
                <td><label for="product_name">product name* :</label></td>
                <td><input required name="product_name" id="product_name" type="text" placeholder="product name..."></td>
            </tr>
            <tr>
                <td><label for="category_name">category* :</label></td>
                <td>
                    <select name="category_id" id="category">
                        <?php
                        $data->each(function ($category) {
                            echo "<option value='cat_" . $category['id'] . "'>" . $category['category_name'] . "</option>";
                        });
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="product_price">product price* : €</label></td>
                <td><input required type='text' name="price" id="product_price" placeholder="0.00" pattern="\d+(\.\d{2})?" /></td>
            </tr>
            <tr>
                <td><label for="product_description">product description* :</label></td>
                <td><textarea required name="description" id="product_description" rows="10" width="60" maxlength="500" placeholder="product description..."></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><button type="submit">Save</button></td>
            </tr>
        </table>
    </form>
</div>