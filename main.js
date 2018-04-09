function get(url, data) {

    var xhr = new XMLHttpRequest()

    console.log(1, xhr.readyState)

    xhr.open('get', url)

    console.log(2, xhr.readyState)

    xhr.onreadystatechange = function(evt) {
        console.log('x', xhr.readyState)
        if(xhr.status >= 200 && xhr.status < 300) {
            console.log('Good');
            console.log(xhr.responseText);
        } else {
            console.log('Bad');
        }
    }

    xhr.send()
}