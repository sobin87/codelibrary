<?php
/* Combines two csv file to a single csv file */
function joinFiles(array $files, $result) {
    if(!is_array($files)) {
        throw new Exception('`$files` must be an array');
    }

    $wH = fopen($result, "w+");

    foreach($files as $file) {
        
        $fh = fopen($file, "r");
        while(!feof($fh)) {
            echo '<br/> inside..';
            fwrite($wH, fgets($fh));
        }
        fclose($fh);
        unset($fh);
        fwrite($wH, "\n"); //usually last line doesn't have a newline
    }
    fclose($wH);
    unset($wH);


}

//echo "Hello";exit;
joinFiles(['file1.csv','file2.csv'],'file3.csv');
?>