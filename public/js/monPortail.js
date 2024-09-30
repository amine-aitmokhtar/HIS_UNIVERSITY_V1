const AccederPortailBtn = document.getElementById('AccederPortailBtn');
AccederPortailBtn.addEventListener('click', function() {
    window.location.href = '/authentification';
});

const CreerUnCompte = document.getElementById('CreerUnCompte');
CreerUnCompte.addEventListener('click', function() {
    window.location.href = '/authentificationCandidat';
});
