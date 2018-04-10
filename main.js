    var xhr = new XMLHttpRequest();
    var dirRoot = "./";

    // On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
    xhr.open('GET', 'list.php');
    xhr.addEventListener('readystatechange', function() { // On gère ici une requête asynchrone
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) { // Si le fichier est chargé sans erreur
            document.getElementById('fileContent').innerHTML = '<span>' + xhr.responseText + + '</span>'; // Et on affiche !
        }
    });
    
    xhr.send(null); // La requête est prête, on envoie tout !



var dossierEx = document.getElementById("fileContent"); //Ici on recupère la div de notre HTML

        // Get the element, add a click listener... ||| On récupère l'element, on ajoute un click listener.
        dossierEx.addEventListener("click", function(event) {
        // event.target is the clicked element! ||| event.target est l'élément cliqué !
        // If it was a list item ||| Si c'était un objet liste (?)
        if (event.target.tagName == "A" || event.target.tagName=="IMG") { //Si la cible de notre click est une balise A 
            if (event.target.tagName=="IMG"){
                element=event.target.parentNode;
            }else{
                element=event.target;
            }
            if (element.innerText == "..") { // Et SI notre event contient ".."
                if (dirRoot != "./") { //Et ENCORE SI notre variable (ligne 2)(chemin de navigation) est différente de la base racine
                    dirRoot = dirRoot.slice(0, -1); // On a enlevé le dernier caractère "/" dans cet exemple.
                    dirRoot = dirRoot.slice(0, dirRoot.lastIndexOf('/')+ 1); // On a rajouté le caractère "/" pour que la navigation marche
                    console.log(dirRoot);    
                }

            } 
            else {
                dirRoot = dirRoot + element.innerText + '/'; //Rebelotte (On a rajouté le caractère "/" pour que la navigation marche) (?)
            }
            
            
            event.preventDefault(); //Pour empêcher l'exécuter l'event "click", du coup on annule le chargement de la page (pas de reload);


            var xhr = new XMLHttpRequest();
        

            // On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
            xhr.open('GET', 'list.php?dossier='+ dirRoot ); //innerText = le text contenu entre 2 balises, exemple <a> Chat </a> 
        
            xhr.addEventListener('readystatechange', function() { // On gère ici une requête asynchrone
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) { // Si le fichier est chargé sans erreur
        
                    document.getElementById('fileContent').innerHTML = '<span>' + xhr.responseText + + '</span>'; // Et on affiche !
                }
            });
        
            xhr.send(null);
        }
    });
