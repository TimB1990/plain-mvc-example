<form method="POST" action=<?= PUBLIC_ROOT . "/products/" . $data['task'] ?>>
    <table>
        <tr>
            <td><label for="product_name">product name* :</label></td>
            <td><input required name="product_name" value="<?= (isset($data['product'])) ? $data['product']->product_name : '' ?>" id="product_name" type="text" placeholder="product name..."></td>
        </tr>
        <tr>
            <td><label for="category_name">category* :</label></td>
            <td>
                <select name="category_id" id="category" value=<?= (isset($data['product'])) ? 'cat_' . $product->category->id : '' ?>>
                    <?php
                    $data['categories']->each(function ($category) {
                        echo "<option value='cat_" . $category['id'] . "'>" . $category['category_name'] . "</option>";
                    });
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="product_price">product price* : €</label></td>
            <td><input required type='text' name="price" id="product_price" value="<?= (isset($data['product'])) ? $data['product']->price : '' ?>" placeholder="0.00" pattern="\d+(\.\d{2})?" /></td>
        </tr>
        <tr>
            <td><label for="product_description">product description:</label></td>
            <td>
                <textarea name="description" id="product_description" rows="10" width="60" maxlength="500" placeholder="product description..."><?php
                    if(isset($data['product'])) echo trim($data['product']->description);
                ?></textarea>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><button type="submit">Save</button></td>
        </tr>
    </table>
    <input type="hidden" name="id" value="<?= (isset($data['product']) && $data['task'] == 'update') ? $data['product']->id : '' ?>">
</form>