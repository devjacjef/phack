<?php
$path = check_path($_GET['path']);

// Exit script early if the path cannot be found.
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

?>

<table id="dirListTable">
    <tr>
        <th>Name</th>
        <th>Size</th>
        <th>Last Opened</th>
    </tr>

    <?php if (!has_files($fsi)): ?>
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
