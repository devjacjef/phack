<?php

/**
 * Checks if requested path is defined or empty.
 *
 * @param string $path A filepath to check.
 * @return $path Returns either the SITE_PATH or the requested path.
 * */
function check_path(string $path): string {
    if(!isset($path) || empty($path)) {
        return SITE_PATH;
    }

    return $path;
}

/**
 * Function to check if FilesystemIterator has files.
 *
 * @param FilesystemIterator $fsi Class to be checked for files.
 * @return bool True if there is a file present, false is there are no files present.
 * */
function has_files($fsi): bool {

    if(!isset($fsi)) {
        return false;
    }

    foreach($fsi as $file) {
        return true;
    }

    return false;
}

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
