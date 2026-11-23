const boutonLogin = document.querySelector(
    "label[for='clic-modif-login']"
);

const imageLogin = boutonLogin.querySelector("img");

boutonLogin.addEventListener("click", function() {
    if (imageLogin.src !== "public/images/stop_modification.png") {
        imageLogin.src = "public/images/stop_modification.png";
    }
    
    else {
        imageLogin.src = "public/images/modification.png";
    }
});
