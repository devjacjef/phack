<?php foreach ($fsi as $f): ?>

    <tr>
        <td>
            <a href="<?= urlencode($f->getFilename()) ?>">
                <?= htmlspecialchars($f->getFilename()) ?>
            </a>
        </td>
        <td><?= $f->getSize() ?></td>
        <td><?= date('d F y', filemtime($f)) ?></td>
    </tr>

<?php endforeach; ?>
