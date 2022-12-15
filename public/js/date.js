function validDate(dateDebutProjet, dateFinProjet, dateDebutEvenement, dateFinEvenement) {
    dateValid = false;
    dateEvenementValid = false
    if (dateDebutProjet <= dateFinProjet)
        dateValid = true;
    else if (dateDebutProjet > dateFinProjet)
        alert('Les dates sont invalides, la date de début du projet ne peux être inférieur a celle de fin !');

    if (dateDebutProjet >= dateDebutEvenement && dateDebutProjet <= dateFinEvenement)
        dateEvenementValid = true;
}