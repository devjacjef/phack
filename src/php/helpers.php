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
 * Return a sanitized absolute path.
 * */
function abs_path($path) {
    if(!isset($path) || empty($path)) {
        return SITE_PATH;
    }

    $path = str_replace(['..', '~'], '', $path);

    $safe_path = realpath(SITE_PATH . DIRECTORY_SEPARATOR . $path);

    if($safe_path === false || !str_starts_with($safe_path, SITE_PATH)) {
        return false;
    }

    return $safe_path;
}

/**
 * Return a relative path.
 * */
function rel_path($path) {
    return ltrim(str_replace(SITE_PATH, '', $path), '/\\');
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
 * @param int $bytes Bytes to be converted.
 * @return string display of converted units.
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
