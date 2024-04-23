<div>
    <form method="POST" action=<?= PUBLIC_ROOT . "/categories/store" ?>>
        <table>
            <tr>
                <td><label for="category_name">Category name* :</label></td>
                <td><input required name="category_name" id="category_name" type="text" placeholder="category name..."></td>
            </tr>
            <tr>
                <td><label for="category_description">category description:</label></td>
                <td><textarea name="description" id="category_description" rows="10" width="60" maxlength="500" placeholder="category description..."></textarea></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><button type="submit">Save</button></td>
            </tr>
        </table>
    </form>
</div>