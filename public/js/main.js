$(this).ready(function() {
    $("form").on("submit", function(event) {
        event.preventDefault();

        var formData = new FormData(this); // Crée un nouvel objet FormData avec les données du formulaire

        var debutDateTravaux = new Date($("input#debutTravaux").val()).setHours(0, 0, 0, 0);
        var finTravauxDate = new Date($("input#finTravaux").val()).setHours(0, 0, 0, 0);
        var dateAUjd = new Date().setHours(0, 0, 0, 0);
        if (finTravauxDate > dateAUjd) {
            alert('La date de fin du projet ne doit pas dépasser la date d\'aujourd\'hui');
        } else if (debutDateTravaux > finTravauxDate) {
            alert('Le projet n\'as pas pu commencer après avoir été fini');
        } else {
            $.ajax({
                url: $(this).attr("action"),
                method: $(this).attr("method"),
                data: formData, // Utilisez l'objet FormData comme données de la requête
                processData: false, // Empêche jQuery de traiter les données
                contentType: false, // Empêche jQuery de définir automatiquement le type de contenu
                success: function(response) {
                    // Gérer la réponse du serveur
                    window.location.href = "http://localhost:8000/traitement";
                },
                error: function(xhr, status, error) {
                    // Gérer les erreurs de requête
                    alert("Une erreur est survenue lors de l'envoi du formulaire.");
                }
            });
        }
    });
});