const boutonLogin = document.querySelector(
    "label[for='clic-modif-login']"
);

const imageLogin = boutonLogin.querySelector("img");

boutonLogin.addEventListener("click", function() {

    imageLogin.src = "public/images/stop_modification.png";

});
