<?php
/**
 * Convert bytes.
 *
 * @see https://stackoverflow.com/a/28047922
 * */
function byteConvert($bytes)
{
    if ($bytes == 0)
        return "0.00 B";

    $s = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
    $e = floor(log($bytes, 1024));

    return round($bytes/pow(1024, $e), 2).$s[$e];
}
?>
