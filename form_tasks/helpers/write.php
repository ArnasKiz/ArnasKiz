<?php

/**
 * Create path if not found and write file
 *
 * @param string $path
 * @param string $filename
 * @param string $contents
 * @return bool
 */
function write($path, $filename, $contents)
{
    if (!file_exists($path . DIRECTORY_SEPARATOR . $filename)) {
        if (createPath($path)) {
            return file_put_contents($path . DIRECTORY_SEPARATOR . $filename, $contents);
        }
        return false;
    }
    return file_put_contents($path . DIRECTORY_SEPARATOR . $filename, $contents);
}

/**
 * Create path recursively
 *
 * @param string $path
 * @return bool
 */
function createPath($path)
{
    if (is_dir($path)) {
        return true;
    }
    $prev_path = substr($path, 0, strrpos($path, '/', -2) + 1);
    $return = createPath($prev_path);
    return ($return && is_writable($prev_path)) ? mkdir($path) : false;
}


// file name
$filename = date('Y-m-d_H-i-s') . '.txt';

// Usage
write('./contacts', $filename, 'content');
