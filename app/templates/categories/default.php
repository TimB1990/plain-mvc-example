<?php
$data->each(function ($category) {
    echo '<tbody>';
    echo '<tr>';
    echo '<td>' . $category['category_name'] . '</td>';
    echo '<td>' . $category['description'] . '</td>';
    echo '</tr>';
    echo '</tbody>';
});
