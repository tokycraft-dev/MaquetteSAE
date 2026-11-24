const checkboxes = document.querySelectorAll(".checkbox-modif");

checkboxes.forEach(function(checkbox) {
    const bouton = document.querySelector(
        "label[for='" + checkbox.id + "']"
    );

    const image = bouton.querySelector("img");

    checkbox.addEventListener("change", function() {
        if (checkbox.checked) {
            image.src = "public/images/stop_modification.png";
        }

        else {
            image.src = "public/images/modification.png";
        }
    });
});

const checkboxesVisibilite = document.querySelectorAll(".checkbox-visibilite");

checkboxesVisibilite.forEach(function(checkbox) {
    const bouton = document.querySelector(
        "label[for='" + checkbox.id + "']"
    );

    const image = bouton.querySelector("img");
    const champ = checkbox.closest(".ligne-mdp").querySelector(".mdp");

    checkbox.addEventListener("change", function() {
        if (checkbox.checked) {
            image.src = "public/images/stop_visibilité.png";
            champ.type = "text";
        }

        else {
            image.src = "public/images/visibilité.png";
            champ.type = "password";
        }
    });
});
