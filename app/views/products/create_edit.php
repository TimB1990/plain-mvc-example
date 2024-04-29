<div>
    <?php
    if (isset($data['error'])) {
        echo $data['error']['msg'];
    } else {
        include_once('../app/views/products/components/create_edit_product_form.php');
    }
    ?>
</div>