<div>
    <div>
    <?php
    if (isset($data['error'])) {
        echo $data['error']['msg'];
    } else {
        include_once('../app/views/categories/components/create_edit_category_form.php');
    }
    ?>
</div>
</div>