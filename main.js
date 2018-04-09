
    var xhr = new XMLHttpRequest();

    // On souhaite juste récupérer le contenu du fichier, la méthode GET suffit amplement :
    xhr.open('GET', 'list.php');

    xhr.addEventListener('readystatechange', function() { // On gère ici une requête asynchrone

        if (xhr.readyState === 4, XMLHttpRequest.DONE && xhr.status === 200) { // Si le fichier est chargé sans erreur

            document.getElementById('fileContent').innerHTML = '<span>' + xhr.responseText + + '</span>'; // Et on affiche !
        }    

    });     
    xhr.send(null); // La requête est prête, on envoie tout !

    document.getElementById('fileContent').addEventListener('click', function(e){ 
        var initElem = e.target.tagName; 
        console.log(e.target.tagName);
       })
}

   



//     fetch('list.php').then(function(response){
//         return response.json();
//     }).then (function(tableau){
//         for (entry of tableau){
//             document.getElementById("fileContent").innerHTML +=entry+"<br/>";
//    }
   
// });  