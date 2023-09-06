$(document).ready(function () {
    // Animation et gestionnaire d'événement pour la navigation
    $(".effect").on("click", function () {
        $(this).addClass("clicked");
        setTimeout(function () {
            $(".effect").removeClass("clicked");
        }, 2000);
    });
////////////////////////////////////////////////////////////////////////////////////////////
    document.addEventListener("DOMContentLoaded", function () {
        // Récupére les éléments nécessaires
        const propertySelector = document.getElementById("property-selector");
        const propertyImage = document.querySelector(".property-image");

        // Éffectue les changements dans le sélecteur
        propertySelector.addEventListener("change", function () {
            // la valeur de l'option sélectionnée
            const selectedValue = propertySelector.value;

            // Ici l'attribut "src" de l'image en fonction de la valeur sélectionnée
            if (selectedValue === "all") {
                propertyImage.src = "image/image2.jpg"; //  Chemin de l'image pour "Tous les biens"
            } else if (selectedValue === "sale") {
                propertyImage.src = "image/image3.jpg"; //  Chemin de l'image pour "Biens à vendre"
            } else if (selectedValue === "rent") {
                propertyImage.src = "image/image4.jpg"; //  Chemin de l'image pour "Biens à louer"
            }
        });
    });
//////////////////////////////////////////////////////////////////////////////////////////////
      // Gestionnaire d'événement pour le bouton d'accueil de la navbar
    $(".navbar-brand").on("click", function (event) {
        event.preventDefault(); // Empêche le comportement par défaut du lien

        // Cacher toutes les sections sauf la section d'accueil
        $(".properties-section, .contact-section").hide();
        $(".home-section").show();
    });
    // Gestionnaire d'événement pour afficher les autres sections lorsque les liens de la navbar sont cliqués
    $(".nav-link").on("click", function (event) {
        event.preventDefault(); // Empêche le comportement par défaut du lien

        // Récupérer l'ID de la section cible à partir de l'attribut href du lien
        var targetSection = $(this).attr("href");

        // Caches toutes les sections sauf la section cible
        $(".home-section, .properties-section, .contact-section").hide();
        $(targetSection).show();
    });
});
/////////////////////////////////////////////////////////////////////////////////////////////////////
// Gestionnaire d'événement pour la soumission du formulaire de contact
$("#contact-form").submit(function (event) {
    event.preventDefault(); // Empêcher le comportement par défaut du formulaire

    // Récupérer les données du formulaire
    const name = $("#name").val();
    const email = $("#email").val();
    const phone = $("#phone").val();
    const message = $("#message").val();
    const propertyId = $("#propertyId").val(); // A voir si nécessaire'champ caché' pour stocker l'ID de la propriété 

    // Envoyer les données via une requête AJAX
    $.ajax({
        type: "POST", // Méthode HTTP
        url: "process-contact.php", // URL du script de traitement
        data: {
            name: name,
            email: email,
            phone: phone,
            message: message,
            propertyId: propertyId
        },
        success: function (response) {
            // Gérer la réponse réussie du serveur
            alert("Votre demande a été envoyée avec succès!");
            // Réinitialiser le formulaire
            $("#contact-form")[0].reset();
        },
        error: function (xhr, status, error) {
            console.log("Erreur AJAX : " + error);
            console.log("Erreur AJAX : " + status);
            console.log("Erreur AJAX : " + xhr);
        }
    });
});





