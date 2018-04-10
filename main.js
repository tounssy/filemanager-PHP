    var xhr = new XMLHttpRequest();

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
        console.log(event.target.tagName);
        if( event.target.tagName == "A") {
            event.preventDefault();
            // List item found!  Output the ID!  ||| Objet liste trouvé, aperçu de l'ID
            // console.log("fileContent", event.target.id.replace("post-", ""), " was clicked!");
            var xhr = new XMLHttpRequest();

            // On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
            xhr.open('GET', 'list.php?dossier=./'+ event.target.innerText + '../');
        
            xhr.addEventListener('readystatechange', function() { // On gère ici une requête asynchrone
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) { // Si le fichier est chargé sans erreur
        
                    document.getElementById('fileContent').innerHTML = '<span>' + xhr.responseText + + '</span>'; // Et on affiche !
                }
                        
            });
        
            xhr.send(null);
        }
    });


function injecteurHTML(data){
    var htmlString = "";

    for (i = 0; i < data.length; i++) {
        htmlString += "<p>" + data[i]
    }
}




 
//  echo '<a  href="'.$iterator.'">-media</a><br/>'; 
//  echo '<a  href="'.$dossier.'">Home'.$fichier.'</a><br/>'; 
//  echo '<a  href="'.$fichier.'">Home 2</a><br/>'; 
//  echo '<a  href="media">media</a><br/>'; 
//  echo '<a  href=".git">.git</a><br/>'; 


//  echo '<a  href="'.$fichier.'">-'.$fichier.'</a><br/>'; 


// dossierRequest.onload = function() {
//     var ourData = document.getElementById("fileContent").innerHTML = this.responseText;

//     injecteurHTML(ourData);

// var dossierRequest = new XMLHttpRequest();
// dossierRequest.open ('GET', '#');


// };
// dossierRequest.send();
