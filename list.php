<?php  

    // $media= dir('./');
    // $tableau = array();
    
    // while($entry = $iterator->read()) { 
    //     $tableau[] = $entry; 
    // }    
    // $iterator->close();
    // echo json_encode($tableau);
    $iterator = new DirectoryIterator(dirname(__FILE__));
foreach ($iterator as $fileinfo) {
    if ($fileinfo->isDir()) {
       echo $fileinfo->getFilename() . "<br/>\n";
    }
    if ($fileinfo->isFile()) {
        echo $fileinfo->getFilename() . " " . $fileinfo->getSize() . "<br/>\n";
    }}
?>
