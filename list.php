<<<<<<< HEAD


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
=======
<?php  

$dossier = './'; // Ici j'appelle mon dossier.
// $contenu_dossier = scandir($dossier); // Ici je vais scanner et afficher en array tout le contenu de mon dossier
// print_r($contenu_dossier); // On affiche le contenu
$iterator = new DirectoryIterator($dossier); // Ici on utilise le D.I pour lire le contenu

// La classe DirectoryIterator permet de lire le contenu d'un dossier
$iterator = new DirectoryIterator('./');

// On boucle sur la liste des documents retournés dans l'itérateur
// foreach($iterator as $document){
//     //   echo 'Nom du document: '.$document->getFilename().'<br>';
//       echo 'Nom du document: '.$document->getExtension().'<br>';
// }


foreach($iterator as $fichier){

    // La fonction isDot retourne TRUE si l'élement courant est "." ou ".."
   if(!$fichier->isDot()){
       echo 'Nom du document: '.$fichier->getFilename().'<br>';
       echo 'Taille du document en octets:  '.$fichier->getSize().'<br>';
       echo 'Type de document (file, dir ou link):  '.$fichier->getType().'<br>';
       echo 'Extension du fichier:  '.$fichier->getExtension().'<br>';
       echo 'Modifié le :  '.$fichier->getMTime().'<br>';

    }
 }




// $dossier = new DirectoryIterator ('./');
// foreach ($dossier as $file)
// {
//     if($file->is_file())
//     {
//         echo $file->getExtension(). '<br>';
//     }
// }



    // $media= dir('./');
    // $tableau = array();
    // $media = new DirectoryIterator(dirname(__FILE__));
    // foreach ($media as $fileinfo){
    //     if (!$fileinfo->isdot() {
    //         var_dump($fileinfo->getFilename());
    //     }
    // }
    // // $media = new DirectoryIterator('./')
    
    // while($entry = $media->read()) { 
    //     $tableau[] = $entry; 
    // }

    // if (is_dir($entry))
    //       {
    //         print '<ul>';
    //         foreach (new DirectoryIterator($entry) as $file)
    //           {
    //             if ($file->isDot()) continue;
    //             $fileName = $file->getFilename();
    //             $pieces = explode('.', $fileName);
    //             $date = explode('-', $pieces[2]);
    //             $filetypes = array(
    //                 "pdf",
    //                 "PDF"
    //             );
    //             $filetype = pathinfo($file, PATHINFO_EXTENSION);
    //             if (in_array(strtolower($filetype), $filetypes))
    //               {
    //                 print '<li><a href="' . $entry . '' . $fileName . '">' . $pieces[2] . '</a></li>';
    //               }
    //           }
    //          print '</ul>';
    //       }
    //     else
    //       {
    //         print $namePreferred . ' are not ready.</p>';
    //       }

// $_GET à faire pour

    // $media->close();
    // echo json_encode($tableau);
   
?>
>>>>>>> 97cf3aafc6f263091c90a6a5932b4423ef467f21
