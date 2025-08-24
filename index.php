<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<?php include __DIR__ . '/includes/header.php' ?>
<table id="dirListTable">
    <tr>
        <th>Name</th>
        <th>Size</th>
        <th>Last Opened</th>
    </tr>

    <?php include __DIR__ . '/includes/partials/dir_table.php' ?>
</table>

<?php include __DIR__ . '/includes/footer.php' ?>
