<?php
$productLabels = [
    'product_name',
    'description',
    'price'
];

echo "<table class='data'>";
$data->each(function ($category, $index) use ($productLabels) {
    $categoryId = 'category_' . $index; // Generate unique ID for each category
    echo '<thead id="' . $categoryId . '">
        <tr>
            <th style="cursor:pointer;" colspan=\'3\' style=\'text-align:left;\' onclick="toggleBody(\'' . $categoryId . '\')">' . $category['category_name'] . '<span id=\'' . $categoryId . '_toggle' . '\' style=\'float:right;font-size:20px;\'>+</span></th>
        </tr>
    </thead>';
    echo '<tbody style=\'display:none;\' id="body_' . $categoryId . '">';
    $category['products']->each(function ($prod) use ($productLabels) {
        echo '<tr>';
        foreach ($productLabels as $label) {
            echo '<td class=\'indent\'>' . (($label !== 'price') ? $prod[$label] : '€ ' . number_format($prod[$label], 2, ',', '.')) . '</td>';
        }
        echo '</tr>';
    });
    echo '</tbody>';
});
echo "</table>";
?>

<script>
    function toggleBody(categoryId) {
        let tbody = document.getElementById("body_" + categoryId);
        if (tbody.style.display === "none" || tbody.style.display === "") {
            tbody.style.display = "table-row-group";
            document.getElementById(categoryId + "_toggle").innerText = "-"
        } else {
            tbody.style.display = "none";
            document.getElementById(categoryId + "_toggle").innerText = "+"
        }
    }
</script>