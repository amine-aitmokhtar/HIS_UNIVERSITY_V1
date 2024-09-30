var selectDay = document.getElementById("day");
for (var i = 1; i <= 31; i++) {
  var option = document.createElement("option");
  option.text = i;
  option.value = i;
  selectDay.appendChild(option);
}

// Ajouter les options pour le sélecteur de mois
var selectMonth = document.getElementById("month");
var months = ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"];
for (var i = 0; i < months.length; i++) {
  var option = document.createElement("option");
  option.text = months[i];
  option.value = i+1;
  selectMonth.appendChild(option);
}

// Ajouter les options pour le sélecteur d'année
var selectYear = document.getElementById("year");
var currentYear = new Date().getFullYear();
for (var i = currentYear; i >= currentYear-100; i--) {
  var option = document.createElement("option");
  option.text = i;
  option.value = i;
  selectYear.appendChild(option);
}

$(document).ready(function() {
    $('.jour').jour({
      dropdownPosition: 'below' // Définir la position de la liste vers le bas
    });
  });
  $(document).ready(function() {
    $('.mois').mois({
      dropdownPosition: 'below' // Définir la position de la liste vers le bas
    });
  });
  $(document).ready(function() {
    $('.annee').aneee({
      dropdownPosition: 'below' // Définir la position de la liste vers le bas
    });
  });

  document.getElementById('form-1').addEventListener('submit', function(event) {
    var selectElements = this.querySelectorAll('select[required]');
    for (var i = 0; i < selectElements.length; i++) {
      if (!selectElements[i].value) {
        event.preventDefault(); // Empêche l'envoi du formulaire
        selectElements[i].classList.add('is-invalid'); // Ajoute une classe pour indiquer une erreur de validation
      }
    }
  });

