<?php
// NOTE: SITE_PATH is defined in header.php.
// TODO: Later update this to only show demos.
if(isset($path) && !empty($path)) {
    $fsi = new FilesystemIterator($path);
} else {
    $fsi = new FilesystemIterator(SITE_PATH);
}
foreach ($fsi as $f): ?>

    <tr>
        <td>
            <a href="<?= urlencode($f->getFilename()) ?>">
                <?= htmlspecialchars($f->getFilename()) ?>
            </a>
        </td>
        <td><?= byteConvert($f->getSize()) ?></td>
        <td><?= date('d F y', filemtime($f)) ?></td>
    </tr>

<?php endforeach; ?>
