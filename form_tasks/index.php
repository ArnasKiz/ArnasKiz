<?php
// test write () from write.php
require_once('./helpers/write.php');

$log = "Name: E. \n";
$log .= "Last Name: V. \n";
$log .= "Email: test@test.com \n";
$log .= "Datetime: " . date('Y-m-d H:i:s');

$filename = date('Y-m-d_H-i-s') . 'txt';

$result = write('./logs', date('Y-m-d_H-i-s') . 'txt', $log);

if ($result) {
    echo 'Created a log file';
} else {
    echo 'Failed to create log file';
}
