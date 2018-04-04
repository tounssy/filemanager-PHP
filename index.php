<?php  // Ici on affiche le contenu du fichier "media"
    $media= dir ('media');
    // $background = dir ('media/background');
    echo "Pointeur: ".$media->handle."<br>\n";
    echo "Chemin: ".$media->path."<br>\n";
    while($entry = $media->read()) { //Read affiche l'interieur du media
        echo $entry."<br>\n";
    }

    // while($entry2 = $background->readdir($media)) { //Read affiche l'intérieur de media/background
    //     echo $entry2."br>\n";
    // }

    $media->close();

    ?>


    <!-- // function list_dir($media) {
    //     if ($dir = opendir($media)) {
    //         while($media = readdir($dir)) {
    //             echo "$media<br>\n";
    //             if(is_dir($media) && !in_array($media, array(".",".."))){
    //                 list_dir($media);
    //             }
    //         }
    //         closedir($dir);
    //     }
    // }
    // list_dir(".");
     -->