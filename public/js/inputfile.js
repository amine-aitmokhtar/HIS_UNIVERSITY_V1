document.addEventListener('DOMContentLoaded', function() {
    var boutonsAjouterFichier = document.querySelectorAll('.btn-ajouter');
    var boutonsSupprimerFichier = document.querySelectorAll('.btn-supprimer');
    var inputFiles = [];

    boutonsAjouterFichier.forEach(function(bouton, index) {
        var inputFile = document.createElement('input');
        inputFiles.push(inputFile);

        bouton.addEventListener('click', function() {
            inputFile.type = 'file';
            inputFile.style.display = 'none';
            inputFile.addEventListener('change', function(event) {
                var fileName = event.target.files[0].name;
                var fileSpan = document.getElementById('nom-fichier-' + (index + 1));
                fileSpan.textContent = fileName;
                fileSpan.classList.add('linkable', 'file-added');
                var fileUrl = URL.createObjectURL(event.target.files[0]);
                fileSpan.setAttribute('data-file-url', fileUrl);
                boutonsAjouterFichier[index].style.display = 'none';
                boutonsSupprimerFichier[index].style.display = 'inline';
            });

            document.body.appendChild(inputFile);
            inputFile.click();
        });

        boutonsSupprimerFichier[index].addEventListener('click', function() {
            var fileSpan = document.getElementById('nom-fichier-' + (index + 1));
            fileSpan.textContent = 'Nom du fichier';
            fileSpan.classList.remove('linkable', 'file-added');
            fileSpan.removeAttribute('data-file-url');
            boutonsAjouterFichier[index].style.display = 'inline';
            boutonsSupprimerFichier[index].style.display = 'none';
        });
    });

    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('linkable') && event.target.classList.contains('file-added')) {
            var fileUrl = event.target.getAttribute('data-file-url');
            window.open(fileUrl, '_blank');
        }
    });

    var boutonSuivant = document.getElementById('bouton-suivant');
    boutonSuivant.addEventListener('click', function() {
        // Vérifier si tous les fichiers ont été ajoutés
        var tousLesFichiersAjoutes = true;
        boutonsAjouterFichier.forEach(function(bouton, index) {
            var fileSpan = document.getElementById('nom-fichier-' + (index + 1));
            if (fileSpan.textContent === 'Nom du fichier') {
                tousLesFichiersAjoutes = false;
            }
        });

        // Passer à l'étape suivante uniquement si tous les fichiers ont été ajoutés
        if (tousLesFichiersAjoutes) {
            // Code pour passer à l'étape suivante ici
            console.log("Passer à l'étape suivante");
        } else {
            // Afficher un message d'erreur ou prendre une autre action appropriée
            console.log("Veuillez ajouter tous les fichiers requis");
        }
    });
});
