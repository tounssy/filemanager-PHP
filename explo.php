<?php
//on créer un tableau qui exclue le . et le ..
$exclude_list = array(".");
// si notre élément est un dossier
if (isset($_GET["dir"])) {
  //alors on récupère le chemin du dossier
  $dir_path = $_SERVER["DOCUMENT_ROOT"]."/".$_GET["dir"];
}
//sinon
else {
  //on récupére le chemin de la racine d'où on se trouve
  $dir_path = $_SERVER["DOCUMENT_ROOT"]."/";
}
//on créer une fonction permettant de naviguer
function dir_nav() {
  //on rend nos variables globales (utilisables partout)
  global $exclude_list, $dir_path;
  //on créer une variables "dossier" qui réalise un tableau qui lui-même compare le contenu de nos variables globales
  $directories = array_diff(scandir($dir_path), $exclude_list);
  //on imprime un ul dans le html
  // echo "<ul>";
  //pour chaque ligne du tableau qu'on a crée au dessus
  foreach($directories as $entry) {
    //si notre entrée est un dossier
    if(is_dir($dir_path.$entry)) {
      //on créer un lien en html et on affichera son contenu
      // echo "<li><a href='?dir=".$_GET["dir"].$entry."/"."'>".$entry."</a></li>";
    }
  }
  //on ferme notre ul
  // echo "</ul>";
  //on re-créer un ul
  // echo "<ul>";
  //pour chaque ligne du tableau qu'on a crée au dessus
  foreach($directories as $entry) {
    //si notre entrée est un fichier
    if(is_file($dir_path.$entry)) {
      
      //alors on affiche le nom du fichier
      // echo "<li>".$entry."</li>";
      // echo "<li><a href='?file=".$_GET["dir"].$entry."'>".$entry."</a></li>";
    }
  }
  //on ferme notre ul
  // echo "</ul>";
}
//on lance notre fonction
dir_nav();
//-- optional placement
// if (isset($_GET["file"])) {
//   echo "<div>";
//   highlight_file($dir_path.$_GET['file']);
//   echo "</div>";
// }
//-- until here
//--
//-- Because I love php.net
$arr = $directories;
echo json_encode($arr);
?>


<?php
//on créer un tableau vide
    $datas = [];
//on exclut le dossier "."
    $exclude_list = array(".");
//on récupère notre chemin racine
    $dir_path = $_SERVER["DOCUMENT_ROOT"]."/explorateur-fichiers";
//on créer un tableau de notre dossier (en excluant notre ".")
    $directories = array_diff(scandir($dir_path), $exclude_list);
//pour chaque entrée du tableau qui est un dossier
    foreach ($directories as $dir) {
        //on ajoute les valeurs qu'on récupère dans notre tableau vide
        $datas[] = [
    
            'isDirectory' => is_dir($dir),
  
            'name' => $dir,
        //je concatène l'ensemble de ces infos
            'fullPath' => $dir
        ];
    }
    //on envoie notre json
    echo json_encode($datas);
?>