function displayToggle() {
    let overlayElement = document.getElementById("overlay");
    overlayElement.classList.toggle("overlay");
}

function displayToggleHospital() {
    let overlayElement = document.getElementById("hospital-list");
    overlayElement.classList.toggle("overlay");
}

function displayToggleDoctor() {
    let overlayElement = document.getElementById("doctor-list");
    overlayElement.classList.toggle("overlay");
}

function displayToggleUser() {
    let overlayElement = document.getElementById("user-list");
    overlayElement.classList.toggle("overlay");
}

function checkCovid() {
    const checks = document.querySelectorAll(".check");
    var contador = 0;
    var overlay1 = document.getElementById("msg_covid_1");
    checks.forEach((checkbox) => {
        if (checkbox.checked === true) {
            contador = contador + 1;
        }
    });
    if (contador >= 2) {
        overlay1.classList.toggle("overlay");
    }
    console.log(contador);
}