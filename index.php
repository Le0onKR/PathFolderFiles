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
function findFolders(string $dirPath): void
{
    foreach (array_diff(scandir($dirPath), [".", ".."]) as $path) {
        $path = $dirPath . "/" . $path;

        if (is_dir($path)) {
            echo $path . PHP_EOL;
        }
    }
}
