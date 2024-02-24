var card = document.getElementById("card");
function openR() {
    card.style.transform = "rotateY(-180deg)";
}
function openL() {
    card.style.transform = "rotateY(0deg)";
}

let btn = document.getElementById("btn");
let user = document.querySelector(".user");
let password = document.querySelector(".password");
let valid = true;
let small = document.querySelector(".msgerr");
user.addEventListener("click", function () {
    alert("bonjour , bienvenue sur mon site web,avant de vous inscrire si vous voulez bien dans le champ mot de passe essayez de metre un mot de passe moins de 7 caractères et essayez de vous connecter ,voila :) ");
},
    { once: true }
)

password.addEventListener("keyup", function () {
    if (password.value.length >= 1 && password.value.length < 8) {
        valid = false;
    } else {
        valid = true;
    }

    if (password.value.length >= 1 && password.value.length < 4) {
        small.classList.add("err1");
        small.classList.remove("err2");
        small.innerHTML = "<i class='fa-solid fa-triangle-exclamation'></i> " + "Mot de passe trop court";
    } else if (password.value.length >= 4 && password.value.length < 8) {
        small.classList.add("err2");
        small.classList.remove("err1");
        small.innerHTML = "<i class='fa-solid fa-exclamation'></i> " + "Mot de passe moyen";
    } else if (password.value.length >= 8) {
        small.classList.remove("err2");
        small.classList.remove("err1");
        small.innerHTML = "<i class='fa-solid fa-user-check'></i>" + "Mot de passe fort";
    }

});

btn.addEventListener("mouseover", move)

function move() {
    if (!valid) {
        btn.classList.toggle("move");
    } else {
        btn.classList.remove("move");
    }
}




window.addEventListener("load", function () {
    alert("L'authentification ne peut pas être effectuée pour le moment en raison de problèmes de serveur.\nVous pouvez consulter l'image de la page après la connexion sur mon github sous le nom auth.png")
    

}, { once: true });
