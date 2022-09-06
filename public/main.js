document.addEventListener("DOMContentLoaded", function(e) {
    let btns = document.getElementsByClassName("todoRowButton")

    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener('click', function(event) {
            console.log('Button clicked' + " " + event.target.id);
          })
    }
})

