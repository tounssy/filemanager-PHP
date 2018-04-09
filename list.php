

    <?php


    $iterator= new DirectoryIterator;
    $media = './';
    
/*     while($entry = $media->read()) { 
        $tableau[] = $entry; 
    }


//$_GET à faire pour

    $media->close();
    echo json_encode($tableau); */

    while($media->valid()) {
        $file = $media->current();
        echo $media->key() . " => " . $file->getFilename() . "\n";
        $iterator->next();
    }
    
   
?>