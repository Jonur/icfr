<?php

if (!$userDirectory) {
    exit;
}

require_once "functions.php";

$filepath = $userDirectory;

$files = array();
$filesNewNames = array();

// Temporarily rename all files with a hash in the sorted array to avoid same file names
$i = 0;
$hash = md5(time()) . rand(1, 999);

foreach (glob("$filepath\*.{JPG,jpg,JPEG,jpeg,GIF,gif,PNG,png}", GLOB_BRACE) as $file) {
    $enumeration = sprintf("%'.04d", ++$i);
    $ext = '.' . pathinfo($file, PATHINFO_EXTENSION);
    $oldFileName = $file;
    $newFileName = pathinfo($file, PATHINFO_DIRNAME) . '\\' . $hash . '-' . $enumeration . $ext;
    rename($oldFileName, $newFileName);
}

// Reinitiate with metadata
foreach (glob("$filepath\*.{JPG,jpg,JPEG,jpeg,GIF,gif,PNG,png}", GLOB_BRACE) as $file) {
    $camera = cameraUsed($file);
    $files[pathinfo($file, PATHINFO_BASENAME)] = $camera['date'];
}

// Sort the files in ascending order based on the creation data metadata
asort($files);

// Form the file names and store them in the file list
$i = 0;

foreach ($files as $file => $value) {
    $enumeration = sprintf("%'.04d", ++$i);
    $ext = '.' . pathinfo($file, PATHINFO_EXTENSION);

    // Temporarily rename all files with a hash in the sorted array to avoid same file names
    $oldFileName = $filepath . '\\' . $file;
    $newFileName = $filepath . '\\' . date("d-m-Y", strtotime($value)) . '-' . ($userLabel ? $userLabel . '-' : '') . $enumeration . $ext;
    $files[$file] = $newFileName;

    rename($oldFileName, $newFileName);
}
