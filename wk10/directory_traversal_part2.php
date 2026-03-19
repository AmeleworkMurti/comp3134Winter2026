<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$path = isset($_GET['q']) ? $_GET['q'] : '.';

// Prevent directory traversal (only allow current directory)
$path = basename($path);

// Prevent accessing non-existing folders
if (!file_exists($path)) {
    echo "Invalid path.";
    exit;
}

// optional for me: prevent filenames (only directories allowed)
if (strpos($path, '.') !== false && $path !== '.') {
    echo "Access denied.";
    exit;
}

print "<pre>";
print_r(scandir($path));
print "</pre>";
?>
