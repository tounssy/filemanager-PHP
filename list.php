<?php  
    $media= dir('./');
    $tableau = array();
    
    while($entry = $media->read()) { 
        $tableau[] = $entry; 
    }

    //Fais quelque chose foutu AJAXJSONJESAISPLUSQUITUES

//$_GET à faire pour

    $media->close();
    echo json_encode($tableau);
   

?>
