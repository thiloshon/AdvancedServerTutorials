<html>
<head>
    <title>Products View</title>
</head>
<body>
<h2>The products in this category are:</h2>

<?php

foreach ($products as $item)

    echo $item['prd'] . '<br>';
?>
</body>
</html>     