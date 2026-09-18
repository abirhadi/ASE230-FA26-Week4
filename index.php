<?php

$path = __DIR__ . "/data/status.txt";

echo "__FILE__: " . __FILE__ . "<br>";
echo "__DIR__: " . __DIR__ . "<br>";

// check if directory exists

$exists = is_dir(__DIR__ . "/temp/");

if ($exists) {
    echo "Directory exists";
} else {
    echo "Directory does not exist";
}


// echo $path;

?>