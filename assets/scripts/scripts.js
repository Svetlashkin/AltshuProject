//модальное окно
function showModalWin() {
          
    var darkLayer = document.createElement("div");
    darkLayer.id = "shadow";
    document.body.appendChild(darkLayer);

    var modalWin = document.getElementById("popupWin");
    modalWin.style.display = "block";

    darkLayer.onclick = function () {  
    darkLayer.parentNode.removeChild(darkLayer);
    modalWin.style.display = "none";
    return false;
    };
}

//валидация формы

let form = document.querySelector("#subsribtion");
let validateBtn = form.querySelector('.window-form-button');

form.addEventListener("submit", (event) => {

    let x = document.querySelector("#name").value;
    let y = document.querySelector('#email').value;

    if (x == "") {
        // event.preventDefault()
      alert("Name must be filled out!");
    } 
    else if (y == "") {
        // event.preventDefault()
        alert("Email must be filled out!");
    } else validateBtn.addEventListener('click', function(event) {
        form.submit(alert('You have subscribed to the news!'));
    });
    event.preventDefault()
});