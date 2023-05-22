let div, p1, body, a, formularios;
body = document.getElementsByTagName("body")[0];
var main = document.getElementsByTagName("main")[0];
formularios = document.forms;
function accion1() {
    main.remove();
    div = document.createElement("div");
    div.classList.add("new");
    p1 = document.createElement("p");
    p1.textContent = "¡Ya eres socio de TATES FC!";
    p1.classList.add("titulo");
    p2 = document.createElement("p");
    p2.textContent = "Ahora inicia sesión";
    p2.style.fontSize = "20px";
    a = document.createElement("a");
    a.setAttribute("href", "../php/Pagina/login.php");
    a.textContent = "aquí";
    a.style.fontSize = "20px";
    p2.style.color = " rgb(4, 35, 61)";
    div.appendChild(p1);
    div.appendChild(p2);
    div.appendChild(a);
    body.appendChild(div);
}
function validarEmail() {
    let email = formularios[0]["elements"]["user"]["value"];
    let expresion = /^\S\w{4,}@\S[a-zA-Z0-9.]{4,}\.[a-zA-Z]{2,}$/;
    c1 = document.getElementById("inputemail");

    if (expresion.test(email)) {
        document.getElementById("equis").style.visibility = "hidden";
        c1.style.border = "2px solid green";
    } else {
        c1.style.border = "2px solid red";
        c1.style.animation = "vibrar 0.3s"
        document.getElementById("equis").style.visibility = "visible";
    }
}
function validarContra1(){
    let contrasena = formularios[0]["elements"]["pass"]["value"];
    let expresion = /(=?.*[A-Z]+)(=?.*[a-z]+)(=?.*\d{2})(=?.*[-_+.]+)/;
    c1 = document.getElementById("inputpassword");
    if (contrasena.length > 10) {
        if (expresion.test(contrasena)) {
            document.getElementById("equis2").style.visibility = "hidden";
            c1.style.border = "2px solid green";
        } else {
            c1.style.border = "2px solid red";
            c1.style.animation = "vibrar 0.3s";
            document.getElementById("equis2").style.visibility = "visible";
        }
    } else {
        c1.style.border = "2px solid red";
        c1.style.animation = "vibrar 0.3s"
        document.getElementById("equis2").style.visibility = "visible";
    }
}
function validarContra2(){
    let contra1 = formularios[0]["elements"]["pass"]["value"];
    let contra2 = formularios[0]["elements"]["pass2"]["value"];
    let span = document.getElementById("mal");
    c1 = document.getElementById("inputpassword2");
    if(contra1 != contra2){
        span.style.visibility = "visible"
        span.style.animation = "vibrar 0.3s"
        span.style.color = "red"
        c1.style.border = "2px solid red";
    }else{
        c1.style.border = "2px solid green";
        span.style.visibility = "hidden";
    }
}
function validarnum(){
    let valor = formularios[0]["elements"]["num"]["value"];
    let expresion = /^\d{3}\s\d{3}\s\d{3}$/;
    c1 = document.getElementById("numeros");
    if(expresion.test(valor)){
        document.getElementById("equis4").style.visibility = "hidden";
        c1.style.border = "2px solid green";
    }else{
        c1.style.border = "2px solid red";
        c1.style.animation = "vibrar 0.3s"
        document.getElementById("equis4").style.visibility = "visible";
    }
}

function verifica(){
    let email = formularios[0]["elements"]["user"]["value"];
    let expresion = /^\S\w{4,}@\S[a-zA-Z0-9.]{4,}\.[a-zA-Z]{2,}$/;

    let contra1 = formularios[0]["elements"]["pass"]["value"];
    let expresion1 = /(=?.*[A-Z]+)(=?.*[a-z]+)(=?.*\d{2})(=?.*[-_+.]+)/;

    let contra2 = formularios[0]["elements"]["pass2"]["value"];

    let num = formularios[0]["elements"]["num"]["value"];
    let expresion3 = /^\d{3}\s\d{3}\s\d{3}$/;

    if(expresion.test(email) && expresion1.test(contra1) && contra1==contra2 && expresion3.test(num)){
        document.getElementById("boton").setAttribute("onclick", "accion1()");
        document.getElementById("boton").style.backgroundColor = "#fff";
        document.getElementById("boton").style.color = "rgb(4, 35, 61)";
    }else{
        document.getElementById("boton").style.backgroundColor = "red";
    }
}