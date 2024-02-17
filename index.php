<?php

// Only Read Files
function findFiles(string $dir): void
{
    foreach (array_diff(scandir($dir), [".", ".."]) as $value) {
        if (!is_file($dir . $value)) {
            echo $value . PHP_EOL;
        }
    }
}

// Only read Folders
function findFolders(string $dir): void
{
    foreach (array_diff(scandir($dir), [".", ".."]) as $path) {
        $path = $dir . "/" . $path;

        if (is_dir($path)) {
            echo $path . PHP_EOL;
        }
    }
}
