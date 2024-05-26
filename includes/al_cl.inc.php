<?php
spl_autoload_register('autoLoadClass');

function autoLoadClass($className) {
    $url = $_SERVER['PHP_SELF'];
     $directory = "./classes/";
    if(strpos($url,'include')){
        $directory = "../classes/";
    }

    $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));
    
    foreach ($iterator as $file) {
        if ($file->isFile()) {
            $fileName = $file->getFilename();
            $filePath = $file->getPathname();
            
            // Check if the filename matches the class name
            if (strpos($fileName, $className) !== false && substr($fileName, -10) === '.class.php') {
                include_once $filePath;
                return;
            }
        }
    }
}