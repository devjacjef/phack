<?php

/*
 * This file contains the file browser for phplayground.
 */

$path = get_path();

// Exit script early if the path cannot be found.
if (!file_exists($path)) {
    echo 'Requested resource was not found.';
    return;
}

// If directory, iterate all files in file system
// else if file, get contents and display them.
$fsi = serve_path($path);
?>

<table id="dirListTable">
    <tr>
        <th>Name</th>
        <th>Type</th>
        <th>Size</th>
        <th>Last Opened</th>
    </tr>

    <?php if (!has_files($fsi)): ?>
        <tr>
            <td colspan="4">
                Nothing to show here.
            </td>
        </tr>
    <?php else: ?>

        <?php foreach ($fsi as $f): ?>
            <tr>
                <td>
                    <a href="?path=<?= urlencode(rel_path($path . '/' . $f->getFilename())) ?>">
                        <?= htmlspecialchars($f->getFilename()) ?>
                    </a>
                </td>
                <td><?= $f->getExtension() ?></td>
                <td><?= byteConvert($f->getSize()) ?></td>
                <td><?= date('d F y', filemtime($f)) ?></td>
            </tr>
        <?php endforeach; ?>

    <?php endif; ?>
</table>
