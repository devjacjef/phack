<?php

$fsi = new FilesystemIterator(__DIR__);
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
    <table style="width: 100%;">
        <tr>
            <th>Name</th>
            <th>Size</th>
            <th>Last Opened</th>
        </tr>
        <?php include __DIR__ . '/dir_table.php' ?>
    </table>
</body>

</html>
