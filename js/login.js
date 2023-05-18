let email, p, contrasena, p2, arriba, abajo, c1, input1, input2;
let formularios = document.forms;

input1 = document.getElementById("username");
input2 = document.getElementById("contraseña");
arriba = document.getElementsByClassName("text1")[0];
abajo = document.getElementsByClassName("text2")[0];

p = document.createElement("p");
p2 = document.createElement("p");

//Función que valida Email
//Si el email es uno de los admins el botón te llevará a la pagina de los admins, donde está toda la info
//Si no, te lleva a la pagina principal

/**
 *  _____t1______@_____t2_____.___t3___-
 * 
 * Tramo 1: no espacios, cualquier caracter, longitud >4
 * Arroba
 * Tramos 2: no espacios, solo letras min, mayus, numeros y puntos, longitud >4
 * Punto
 * Tramos 3: no espacios, solo letras y no numeros y longitud >1
 */
function validar() {
    let email = formularios[0]["elements"]["email"]["value"];
    let expresion = /^\S\w{4,}@\S[a-zA-Z0-9.]{4,}\.[a-zA-Z]{2,}$/;
    c1 = document.getElementsByClassName("email")[0];
    if (expresion.test(email)) {
        p.textContent = "Email válido";
        p.style.color = "green";
        p.style.border = "2px solid green";
        p.style.fontSize = "15px";
        p.style.padding = "10px";
        input1.style.borderBottom = "2px solid green";
        input1.style.borderRight = "2px solid green";
        arriba.appendChild(p);
    } else {
        p.textContent = "Email Inválido";
        p.style.color = "red";
        input1.style.borderBottom = "2px solid red";
        input1.style.borderRight = "2px solid red";
        p.style.fontSize = "15px";
        arriba.appendChild(p);
        c1.style.animation = "vibrar 0.3s"
    }
}
//Validar Contraseña
/*  Una Mayuscula
*    Una Minuscula
*    Dos digitos seguidos
*    Debe de tener un signo de los siguientes - _ . +
*    Longitud > 10
*/
function validar2() {
    let contrasena = formularios[0]["elements"]["contra"]["value"];
    let expresion = /(=?.*[A-Z]+)(=?.*[a-z]+)(=?.*\d{2})(=?.*[-_+.]+)/;
    c1 = document.getElementsByClassName("inputpassword")[0];
    if (contrasena.length > 10) {
        if (expresion.test(contrasena)) {
            p2.textContent = "Contraseña válida";
            p2.style.color = "green";
            p2.style.border = "2px solid green";
            p2.style.fontSize = "15px";
            p2.style.marginTop = "20px";
            p2.style.padding = "10px";
            input2.style.borderBottom = "2px solid green";
            input2.style.borderRight = "2px solid green";
            abajo.appendChild(p2);
        } else {
            p2.textContent = "Contraseña Inválida";
            p2.style.color = "red";
            p2.style.border = "transparent";
            input2.style.borderBottom = "2px solid red";
            input2.style.borderRight = "2px solid red";
            p2.style.fontSize = "15px";
            abajo.appendChild(p2);
            c1.style.animation = "vibrar 0.3s"
        }
    } else {
        p2.textContent = "Debe contener más de 10 caracteres";
        p2.style.color = "red";
        input2.style.borderBottom = "2px solid red";
        input2.style.borderRight = "2px solid red";
        p2.style.fontSize = "15px";
        abajo.appendChild(p2);
        c1.style.animation = "vibrar 0.3s"
    }
}
/**Funcion que valida el email y la contraseña, si el email es de un Administrador y su contraseña es válida, el botón de Login le añadirá la direccion de admin.html
 * Es importante que la contraseña sea válida ya que si no lo es da igual que el email sea de un admin que el botón no funcionará
 * Si el email y contraseña son validos la pagina te devolverá al INICIO
 */
function validarTotal() {
    let email = formularios[0]["elements"]["email"]["value"];
    let expresion1 = /^\S\w{4,}@\S[a-zA-Z0-9.]{4,}\.[a-zA-Z]{2,}$/;

    let contrasena = formularios[0]["elements"]["contra"]["value"];
    let expresion2 = /(=?.*[A-Z]+)(=?.*[a-z]+)(=?.*\d{2})(=?.*[-_+.]+)/;

    if ((email == "josevera@gmail.com" && expresion2.test(contrasena)) || (email == "juanrobayo@gmail.com" && expresion2.test(contrasena)) || (email == "davidchavarria@gmail.com" && expresion2.test(contrasena))) {
        document.getElementById("boton").setAttribute("href", "admin.php");
    } else if(expresion1.test(email)  && expresion2.test(contrasena)) {
        document.getElementById("boton").setAttribute("href", "inicio.php");
    }else{
        document.getElementById("boton").removeAttribute("href");
    }
}
