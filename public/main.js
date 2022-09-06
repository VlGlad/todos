/* function doAJAX () {
    fetch("jstest")
    .then(result => result.text())
    .then((data) => { console.log(data); });
}

doAJAX(); */


function sendButtonRequest(button_id){
    let data_body = "button_id=" + button_id;

    fetch("jstest", { 
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
    .then((data) => {console.log(data);})
    .catch(() => console.log('ошибка'));
}


document.addEventListener("DOMContentLoaded", function(e) {
    let btns = document.getElementsByClassName("todoRowButton")

    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener('click', function(event) {
            sendButtonRequest(event.target.id)
          })
    }
})

