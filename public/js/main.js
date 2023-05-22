$(this).ready(function() {
    $("form").on("submit", function(event) {
        event.preventDefault();
        var finTravauxDate = new Date($("input#finTravaux").val()).setHours(0, 0, 0, 0);
        var dateAUjd = new Date().setHours(0, 0, 0, 0);
        if (finTravauxDate > dateAUjd) {
            alert('La date de fin du projet ne doit pas dépassé la date d\'aujourd\'hui');
            console.log('a');
        } else {
            // Effectuer la requête AJAX pour soumettre les données du formulaire
            $.ajax({
                url: $(this).attr("action"),
                method: $(this).attr("method"),
                data: $(this).serialize(),
                success: function(response) {
                    // Gérer la réponse du serveur
                    console.log("a");
                },
                error: function(xhr, status, error) {
                    // Gérer les erreurs de requête
                    console.log("b");
                }
            });
        }
    })
})