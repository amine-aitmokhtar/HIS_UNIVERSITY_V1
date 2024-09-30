const pwShowHide = document.querySelectorAll(".eye-icon");
const links = document.querySelectorAll(".link");

// Récupération des éléments du DOM
const connexionForm = document.querySelector('.form.login');
const inscriptionForm = document.querySelector('.form.signup');
const forgotPasswordForm = document.querySelector('.form.forgot-password');
const forgotPasswordForm2 = document.querySelector('.form.forgot-password2');
const forgotPasswordForm3 = document.querySelector('.form.forgot-password3');

const forgotPasswordLink = document.querySelector('.forgot-pass-link');
const loginLink = document.querySelector('.login-link');
const loginLink2 = document.querySelector('.login-link2');
const loginLink3 = document.querySelector('.login-link3');
const loginLink4 = document.querySelector('.login-link4');
const signupLink = document.querySelector('.signup-link');

// Afficher le formulaire de connexion par défaut
connexionForm.style.display = 'block';
inscriptionForm.style.display = 'none';
forgotPasswordForm.style.display = 'none';
forgotPasswordForm2.style.display = 'none';
forgotPasswordForm3.style.display = 'none';

function showConnexionForm() {
    connexionForm.style.display = 'block';
    inscriptionForm.style.display = 'none';
    forgotPasswordForm.style.display = 'none';
    forgotPasswordForm2.style.display = 'none';
    forgotPasswordForm3.style.display = 'none';
}

function showInscriptionForm() {
    connexionForm.style.display = 'none';
    inscriptionForm.style.display = 'block';
    forgotPasswordForm.style.display = 'none';
    forgotPasswordForm2.style.display = 'none';
    forgotPasswordForm3.style.display = 'none';
}

function showForgotPasswordForm() {
  connexionForm.style.display = 'none';
  inscriptionForm.style.display = 'none';
  forgotPasswordForm.style.display = 'block';
  forgotPasswordForm2.style.display = 'none';
  forgotPasswordForm3.style.display = 'none';
}

function showForgotPasswordForm2() {
    connexionForm.style.display = 'none';
    inscriptionForm.style.display = 'none';
    forgotPasswordForm.style.display = 'none';
    forgotPasswordForm2.style.display = 'block';
    forgotPasswordForm3.style.display = 'none';
}

function showForgotPasswordForm3() {
    connexionForm.style.display = 'none';
    inscriptionForm.style.display = 'none';
    forgotPasswordForm.style.display = 'none';
    forgotPasswordForm2.style.display = 'none';
    forgotPasswordForm3.style.display = 'block';
}

forgotPasswordLink.addEventListener('click', showForgotPasswordForm);
loginLink.addEventListener('click', showConnexionForm);
loginLink2.addEventListener('click', showConnexionForm);
loginLink3.addEventListener('click', showConnexionForm);
loginLink4.addEventListener('click', showConnexionForm);
signupLink.addEventListener('click', showInscriptionForm);

//eyeIcon
pwShowHide.forEach(eyeIcon => {
  eyeIcon.addEventListener("click", () => {
    let pwFields = eyeIcon.parentElement.querySelectorAll(".password");

    pwFields.forEach(password => {
      if (password.type === "password") {
        password.type = "text";
        eyeIcon.classList.replace("bx-hide", "bx-show");
      } else {
        password.type = "password";
        eyeIcon.classList.replace("bx-show", "bx-hide");
      }
    });
  });
});



/* Validations */
var connexionEmailErreur = document.getElementById('connexion-email-erreur');
var connexionPasswordErreur = document.getElementById('connexion-password-erreur');

var inscriptionEmailErreur = document.getElementById('inscription-email-erreur');
var inscriptionPasswordErreur = document.getElementById('inscription-password-erreur');
var inscriptionPassword2Erreur = document.getElementById('inscription-password2-erreur');

var forgotEmailErreur = document.getElementById('forgot-email-erreur');
var confirmationCodeErreur = document.getElementById('confirmation-code-erreur');
var newPasswordErreur = document.getElementById('new-password-erreur');
var newPassword2Erreur = document.getElementById('new-password2-erreur');


function validateConnexionEmail() {
    var connexionEmail = document.getElementById('connexion-email');
    var emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Expression régulière pour valider le format de l'adresse e-mail

    if (connexionEmail.value.trim() === '') {
        connexionEmailErreur.innerText = 'Veuillez entrer votre adresse e-mail.';
        return false;
    } else if (!connexionEmail.value.match(emailFormat)) {
        connexionEmailErreur.innerText = 'Veuillez entrer une adresse e-mail valide.';
        return false;
    } else {
        connexionEmailErreur.innerText = '';
        return true;
    }
}

function validateConnexionPassword() {
    var connexionPassword = document.getElementById('connexion-password');

    if (connexionPassword.value.trim() === '') {
        connexionPasswordErreur.innerText = 'Veuillez entrer votre mot de passe.';
        return false;
    } else {
        connexionPasswordErreur.innerText = '';
        return true;
    }
}

function validateInscriptionEmail() {
    var inscriptionEmail = document.getElementById('inscription-email');
    var emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Expression régulière pour valider le format de l'adresse e-mail

    if (inscriptionEmail.value.trim() === '') {
        inscriptionEmailErreur.innerText = 'Veuillez entrer votre adresse e-mail.';
        return false;
    } else if (!inscriptionEmail.value.match(emailFormat)) {
        inscriptionEmailErreur.innerText = 'Veuillez entrer une adresse e-mail valide.';
        return false;
    } else {
        inscriptionEmailErreur.innerText = '';
        return true;
    }
}

function validateInscriptionPassword() {
    var inscriptionPassword = document.getElementById('inscription-password');
    var passwordStrength = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (inscriptionPassword.value.trim() === '') {
        inscriptionPasswordErreur.innerText = 'Veuillez entrer un mot de passe.';

        return false;
    } else if (!inscriptionPassword.value.match(passwordStrength)) {
        inscriptionPasswordErreur.innerText = 'Faible';
        return false;
    } else {
        inscriptionPasswordErreur.innerText = '';
        return true;
    }
}

function validateInscriptionPassword2() {
    var inscriptionPassword = document.getElementById('inscription-password');
    var inscriptionPassword2 = document.getElementById('inscription-password2');

    if (inscriptionPassword2.value.trim() === '') {
        inscriptionPassword2Erreur.innerText = 'Veuillez confirmer votre mot de passe.';
        return false;
    } else if (inscriptionPassword2.value !== inscriptionPassword.value) {
        inscriptionPassword2Erreur.innerText = 'Les mots de passe ne correspondent pas.';
        return false;
    } else {
        inscriptionPassword2Erreur.innerText = '';
        return true;
    }
}

function validateForgotEmail() {
    var forgotEmail = document.getElementById('forgot-email');
    var emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Expression régulière pour valider le format de l'adresse e-mail

    if (forgotEmail.value.trim() === '') {
        forgotEmailErreur.innerText = 'Veuillez entrer votre adresse e-mail.';
        return false;
    } else if (!forgotEmail.value.match(emailFormat)) {
        forgotEmailErreur.innerText = 'Veuillez entrer une adresse e-mail valide.';
        return false;
    } else {
        forgotEmailErreur.innerText = '';
        return true;
    }
}

function validateNewPassword() {
    var newPassword = document.getElementById('new-password');
    var passwordStrength = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    if (newPassword.value.trim() === '') {
        inscriptionPasswordErreur.innerText = 'Veuillez entrer un mot de passe.';

        return false;
    } else if (!newPassword.value.match(passwordStrength)) {
        newPasswordErreur.innerText = 'Faible';
        return false;
    } else {
        newPasswordErreur.innerText = '';
        return true;
    }
}

function validateNewPassword2() {
    var newPassword = document.getElementById('new-password');
    var newPassword2 = document.getElementById('new-password2');

    if (newPassword2.value.trim() === '') {
        newPassword2Erreur.innerText = 'Veuillez confirmer votre mot de passe.';
        return false;
    } else if (newPassword2.value !== newPassword.value) {
        newPassword2Erreur.innerText = 'Les mots de passe ne correspondent pas.';
        return false;
    } else {
        newPassword2Erreur.innerText = '';
        return true;
    }
}



//mot de pass oublié
function sendConfirmationCode() {
    var email = document.getElementById('forgot-email').value.trim();
    var verificationCode = generateVerificationCode(); // Fonction à implémenter pour générer le code de vérification

    // Ici, vous pouvez envoyer le code de vérification à l'adresse e-mail spécifiée
    
    // Sauvegarder le code de vérification pour la vérification ultérieure
    localStorage.setItem('verificationCode', verificationCode);

    showForgotPasswordForm2();
}

function generateVerificationCode() {
    // À implémenter
    // Retourne un code de vérification aléatoire de 6 chiffres
    // Par exemple : return Math.floor(100000 + Math.random() * 900000);
}

function verifyConfirmationCode() {
    var verificationCode = document.getElementById('confirmation-code');
    var savedVerificationCode = localStorage.getItem('verificationCode');

    showForgotPasswordForm3(); //à supprimier !

    if (verificationCode.value.trim() === '') {
        confirmationCodeErreur.innerText = 'Veuillez entrer le code de vérification.';
        return false;
    } else if (verificationCode.value !== savedVerificationCode) {
        confirmationCodeErreur.innerText = 'Le code de vérification est incorrect.';
        return false;
    } else {
        confirmationCodeErreur.innerText = '';
        return true;
        //showForgotPasswordForm3();
    }

}

function newPassword() {
    if (validateResetPasswordVerificationCode() && validateResetPasswordNewPassword()) {
        // Ici, vous pouvez réinitialiser le mot de passe en utilisant le nouveau mot de passe saisi
        
        // Afficher un message de succès ou rediriger l'utilisateur vers la page de connexion
    }

}



// Google
// Charger l'API d'authentification Google
function loadGoogleAuth() {
    gapi.load('auth2', function() {
      gapi.auth2.init({
        client_id: '509843440867-3dlrogikj9tb9q3bi0g7np7tre0cqmae.apps.googleusercontent.com'
      });
      
      // Récupérer le bouton de connexion
      const googleSigninButton = document.getElementById('google-signin-button');
      const googleSigninButton2 = document.getElementById('google-signin-button2');
      
      // Ajouter un gestionnaire d'événement au clic du bouton de connexion
      googleSigninButton.addEventListener('click', function() {
        // Demander l'autorisation de connexion avec un compte Google
        gapi.auth2.getAuthInstance().signIn().then(function(googleUser) {
          // Utiliser les informations de l'utilisateur connecté
          const profile = googleUser.getBasicProfile();
          const userEmail = profile.getEmail();
          const userName = profile.getName();
          
          // Faites quelque chose avec les informations de l'utilisateur, par exemple, envoyez-les à votre serveur
          
        });
      });

      googleSigninButton2.addEventListener('click', function() {
        // Demander l'autorisation de connexion avec un compte Google
        gapi.auth2.getAuthInstance().signIn().then(function(googleUser) {
          // Utiliser les informations de l'utilisateur connecté
          const profile = googleUser.getBasicProfile();
          const userEmail = profile.getEmail();
          const userName = profile.getName();
          
          // Faites quelque chose avec les informations de l'utilisateur, par exemple, envoyez-les à votre serveur
          
        });
      });
    });
  }
  
  // Charger l'API d'authentification Google lors du chargement de la page
  window.onload = function() {
    loadGoogleAuth();
  };
  