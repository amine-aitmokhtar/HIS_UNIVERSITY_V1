<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion et d'inscription réactif</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/authentification.css') }}">

</head>
<body>
    <section class="container forms">

        <!-- Formulaire de connexion -->
        <div class="form login">
            <div class="form-content">
                <header>Connexion</header>
                <form action="#" novalidate>
                    <div class="field input-field">
                        <input type="email" placeholder="Email universitaire (example@his.edu.dz)" id="connexion-email" onkeyup="validateConnexionEmail()" class="input">
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
    <script src="{{ asset('js/authentification.js') }}"></script>

</body>
</html>
