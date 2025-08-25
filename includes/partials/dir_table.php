<?php
// NOTE: SITE_PATH is defined in header.php.
// TODO: Tidy this file up a bit more later.

// Checking if path is not set or is empty.
// Defaults to SITE_PATH or gets the path.
if (!isset($_GET['path']) || empty($_GET['path'])) {
    $path = SITE_PATH;
} else {
    $path = $_GET['path'];
}


// Exit script early if the path cannot be determined.
if (!file_exists($path)) {
    echo 'Requested resource was not found.';
    return;
}

// If directory, iterate all files in file system
// else if file, get contents and display them.
if (is_dir($path)) {
    $fsi = new FilesystemIterator($path, FilesystemIterator::SKIP_DOTS);
} else {
    echo file_get_contents($path);
    return;
}

$hasFiles = false;
foreach ($fsi as $file) {
    $hasFiles = true;
    break;
}
?>

<table id="dirListTable">
    <tr>
        <th>Name</th>
        <th>Size</th>
        <th>Last Opened</th>
    </tr>

    <?php if (!$hasFiles): ?>
        <tr>
            <td colspan="3">
                Nothing to show here.
            </td>
        </tr>
    <?php else: ?>

        <?php foreach ($fsi as $f): ?>
            <tr>
                <td>
                    <a href="?path=<?= urlencode($f->getFilename()) ?>">
                        <?= htmlspecialchars($f->getFilename()) ?>
                    </a>
                </td>
                <td><?= byteConvert($f->getSize()) ?></td>
                <td><?= date('d F y', filemtime($f)) ?></td>
            </tr>
        <?php endforeach; ?>

    <?php endif; ?>
</table>
