<?php
define('SITE_PATH', realpath(__DIR__ . '/..'));

include SITE_PATH . '/src/php/helpers.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="src/css/style.css">
    <noscript>
        <!--This is a little joke.-->
        By disabling JS, you've made the right choice. Enjoy your freedom.
    </noscript>
</head>


<body>
<div class="wrapper">
    <header class="page-header">
        <a href="?path=/" class="logo">layground</a>
    </header>
