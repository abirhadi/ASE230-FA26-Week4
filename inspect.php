<?php
ini_set('fatal_error_stack_trace.enabled', true); 

$file_path = __DIR__ . "/data/status.txt";

echo "Path: $file_path<br>";

if (file_exists($file_path)) {
    echo "Exists: True<br>";
} else {
    echo "Exists: False<br>";
}

// Check whether the file exists
if (is_file($file_path)) {
    echo "Regular file: True <br>";

    // retrieve file size in Bytes
    echo "Size: " . filesize($file_path) . " bytes <br>";
    echo "Modified: " . date("Y-m-d H:i:s", filemtime($file_path));
} else {
    echo "Regular file: False <br>";
}

// Working with DIRS
$dirPath = __DIR__ . "/temp";

if (!is_dir($dirPath)) {
    // if not a directory, create it
    echo "<br>Creating diretory: $dirPath <br>";
    mkdir($dirPath);
}

// list files in a directory
$fileList = scandir(__DIR__ . "/data");

foreach ($fileList as $file) {
    echo "Filename: $file <br>";
}

// Read a file
$content = file_get_contents($file_path);
echo $content;

// write contents
$content = "Our new content written from inspect.php\n";

$result = file_put_contents($file_path, $content);

if ($result === false) {
    echo "<br>Failed to write in $file_path <br>";
    $perm = is_writable($file_path);

    if ($perm) {
        echo "Allowed to write: true <br>";
    } else {
        echo "Allowed to write: false <br>";
    }
} else {
    echo "<br>writtne $result bytes <br>";
}

echo "A new line has been added";

echo "Adding a new line for git pull demo";

?>