<?php
// Quick diagnostic script - delete after debugging
echo "<h2>URL Debug Info</h2>";
echo "<pre>";
echo "REQUEST_URI:  " . $_SERVER['REQUEST_URI'] . "\n";
echo "SCRIPT_NAME:  " . $_SERVER['SCRIPT_NAME'] . "\n";
echo "PHP_SELF:     " . $_SERVER['PHP_SELF'] . "\n";
echo "QUERY_STRING: " . ($_SERVER['QUERY_STRING'] ?? '') . "\n";
echo "PATH_INFO:    " . ($_SERVER['PATH_INFO'] ?? 'NOT SET') . "\n";
echo "\n--- base_url computation ---\n";
$base = str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
echo "Computed base path: " . $base . "\n";
echo "</pre>";
