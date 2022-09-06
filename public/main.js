function sendButtonRequest(event){
    button_id = event.target.id
    let data_body = "button_id=" + button_id;

    fetch("delete", { 
        method: "POST",
        body: data_body,
        headers:{"content-type": "application/x-www-form-urlencoded"} 
        })
    .then( (response) => {
            if (response.status !== 200) {           
                return Promise.reject();
            }   
    return response.text()
    })
    .then((data) => {
        parent = event.target.parentNode;
        parent.style.display = 'None';
    })
    .catch();
}


document.addEventListener("DOMContentLoaded", function(e) {
    let btns = document.getElementsByClassName("todoRowButton")

    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener('click', function(event) {
            sendButtonRequest(event)
          })
    }
})

