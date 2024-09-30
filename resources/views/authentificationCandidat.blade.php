<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion et d'inscription réactif</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/authentificationCandidat.css') }}">

</head>
<body>
    <section class="container forms">

        <!-- Formulaire de connexion -->
        <div class="form login">
            <div class="form-content">
                <header>Connexion</header>
                <form action="#" novalidate>
                    <div class="field input-field">
                        <input type="email" placeholder="Email" id="connexion-email" onkeyup="validateConnexionEmail()" class="input">
                        <span id="connexion-email-erreur" class="error-message"></span>
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Mot de passe" id="connexion-password" onkeyup="validateConnexionPassword()" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                        <span id="connexion-password-erreur" class="error-message"></span>
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass-link">Mot de passe oublié ?</a>
                    </div>

                    <div class="field button-field">
                        <button type="button" onclick="sendCode()">Connexion</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Vous n'avez pas de compte ?</span>
                    <a href="#" class="signup-link">Inscription</a>
                </div>
            </div>

            <div class="line"></div>

            <div id="google-signin-button-container">
                <button id="google-signin-button" class="google-signin-button">Se connecter avec Google</button>
            </div>
        </div>

        <!-- Formulaire d'inscription -->
        <div class="form signup">
            <div class="form-content">
                <header>Inscription</header>
                <form action="#" novalidate>
                    <div class="field input-field">
                        <input type="email" placeholder="Email" id="inscription-email" onkeyup="validateInscriptionEmail()" class="input">
                        <span id="inscription-email-erreur" class="error-message"></span>
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Créer un mot de passe" id="inscription-password" onkeyup="validateInscriptionPassword()" class="password">
                        <span id="inscription-password-erreur" class="error-message"></span>
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Confirmer le mot de passe" id="inscription-password2" onkeyup="validateInscriptionPassword2()" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                        <span id="inscription-password2-erreur" class="error-message"></span>
                    </div>

                    <div class="field button-field">
                        <button type="button" onclick="sendCode()">Inscription</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Vous avez déjà un compte ?</span>
                    <a href="#" class="login-link">Connexion</a>
                </div>
            </div>

            <div class="line"></div>

            <div id="google-signin-button-container">
                <button id="google-signin-button2" class="google-signin-button">S'inscrire avec Google</button>
            </div>
        </div>

        <!-- Formulaire mot de passe oublié -->
        <div class="form forgot-password">
            <div class="form-content">
                <header>Mot de passe oublié</header>
                <form action="#" novalidate>
                    <div class="field input-field">
                        <input type="email" placeholder="Email" id="forgot-email" onkeyup="validateForgotEmail()" class="input">
                        <span id="forgot-email-erreur" class="error-message"></span>
                    </div>

                    <div class="field button-field">
                        <button type="button" onclick="sendConfirmationCode()">Envoyer le code de confirmation</button>
                    </div>
                </form>

                <div class="form-link">
                    <span></span>
                    <a href="#" class="login-link2">Retour à la connexion</a>
                </div>
            </div>
        </div>

        <div class="form forgot-password2">
            <div class="form-content">
                <header>Mot de passe oublié</header>
                <form action="#" novalidate>
                    <div class="field input-field">
                        <input type="text" placeholder="Code de vérification" id="confirmation-code" onkeyup="validateConfirmationCode()" class="input">
                        <span id="Confirmation-code-erreur" class="error-message"></span>
                    </div>

                    <div class="field button-field">
                        <button type="button" onclick="verifyConfirmationCode()">Vérifier</button>
                    </div>
                </form>

                <div class="form-link2">
                    <span></span>
                    <a href="#" class="login-link3">Retour à la connexion</a>
                </div>
            </div>
        </div>

        <div class="form forgot-password3">
            <div class="form-content">
                <header>Mot de passe oublié</header>
                <form action="#" novalidate>
                    <div class="field input-field">
                        <input type="password" placeholder="Nouveau mot de passe" id="new-password" onkeyup="validateNewPassword()" class="password">
                        <span id="new-password-erreur" class="error-message"></span>
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Confirmer le mot de passe" id="new-password2" onkeyup="validateNewPassword2()" class="password">
                        <i class='bx bx-hide eye-icon'></i>
                        <span id="new-password2-erreur" class="error-message"></span>
                    </div>

                    <div class="field button-field">
                        <button type="button" onclick="newPassword()">Valider</button>
                    </div>
                </form>

                <div class="form-link3">
                    <span></span>
                    <a href="#" class="login-link4">Retour à la connexion</a>
                </div>
            </div>
        </div>
    </section>


    <!-- JavaScript -->
    <script src="{{ asset('js/authentificationCandidat.js') }}"></script>

    <!--Google-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</body>
</html>
