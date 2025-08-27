<?php
$crumbs = crumbs();
$link = '';
?>

<nav class="breadcrumb">
    <ol>
        <li>
            <a href="?path=/">
                Home
            </a>
        </li>
        <?php foreach ($crumbs as $crumb): ?>
            <?php $link .= '/' . $crumb ?>
            <li>
                <a href="?path=<?= urlencode(strtolower($link)) ?>">
                    <?= htmlspecialchars($crumb) ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ol>
</nav>
