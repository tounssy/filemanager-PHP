<?php  

$dossier = './'; // Ici j'appelle mon dossier.
    if (isset($_GET['dossier'] )) {
        $dossier = $_GET['dossier'];
    }
// $contenu_dossier = scandir($dossier); // Ici je vais scanner et afficher en array tout le contenu de mon dossier

// print_r($contenu_dossier); // On affiche le contenu


// $iterator = new DirectoryIterator($dossier); // Ici on utilise le D.I pour lire le contenu

// La classe DirectoryIterator permet de lire le contenu d'un dossier
$iterator = new DirectoryIterator($dossier);

// On boucle sur la liste des documents retournés dans l'itérateur
// foreach($iterator as $document){
//     //   echo 'Nom du document: '.$document->getFilename().'<br>';
//       echo 'Nom du document: '.$document->getExtension().'<br>';
// }


foreach($iterator as $fichier){

    // La fonction isDot retourne TRUE si l'élement courant est "." ou ".."
   if(!$fichier->isDir()){ // Si ce n'est pas un dossier       
       echo $fichier->getFilename().'<br>';
    //    echo 'Taille du document en octets:  '.$fichier->getSize().'<br>';
    //    echo 'Type de document (file, dir ou link):  '.$fichier->getType().'<br>';
    //    echo 'Extension du fichier:  '.$fichier->getExtension().'<br>';
    //    echo 'Modifié le :  '.$fichier->getMTime().'<br>';

    } else {
        echo '<a href="#">' .$fichier->getFilename() .'</a><br>';
    }
 }
 
/* $dossier = $_REQUEST["dossier"];
$fichier = "";

 if($dossier !== "") {
     $dossier = strtolower($dossier);
     $len=strlen($dossier);
    foreach($fichier as $name) {
        if(stristr($dossier, substr($name, 0, $len))) {
            if ($fichier === "") {
                $fichier = $name;
            } else {
                $fichier.= ", $name";
            }
        }
    }

    else {        
        if ($fichier->getFilename()!=='.' ){ // Si le nom du fichier est différent de '.' (pour éffacer le '.' qu'on avait dans notre explorateur)
            if ($fichier->getFilename()=='..' ){ // Si le nom du fichier est différent de '.' (pour éffacer le '.' qu'on avait dans notre explorateur)
                echo '<a href="#" class="precedent url">'.$fichier->getFilename().'</a> <br>';
            }
            else {
                echo '<a href="#" class="dossier url"><img class="image">'.$fichier->getFilename().'</a><br>';
            }
        }
        
    }
 }
 

// include ('test.php'); //test include

?>