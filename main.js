    var xhr = new XMLHttpRequest();

    // On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
    xhr.open('GET', 'list.php');

    xhr.addEventListener('readystatechange', function(event) { // On gère ici une requête asynchrone

        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) { // Si le fichier est chargé sans erreur

            document.getElementById('fileContent').innerHTML = '<span>' + xhr.responseText + + '</span>'; // Et on affiche !
        }

    });

    xhr.send(null); // La requête est prête, on envoie tout !

    /* document.getElementById("filecontent").addEventListener("click", function(event) {
        if(event.target && event.target.tagName == "a") {
            console.log("filecontent", event.target.id.replace("post-", ""), "was clicked");
        }
    }); */


    
//     fetch('list.php').then(function(response){
//         return response.json();
//     }).then (function(tableau){
//         for (entry of tableau){
//             document.getElementById("fileContent").innerHTML +=entry+"<br/>";
//    }
   
// });


/* function affichage(str) {
    if(str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if(window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest ();
        }
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "getuser.php?q="+str,true);
    xmlhttp.send();
} */

  
