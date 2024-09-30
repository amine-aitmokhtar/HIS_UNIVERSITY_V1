const customSidebar = document.querySelector(".custom-sidebar");
const customSidebarClose = document.querySelector("#custom-sidebar-close");
const customMenu = document.querySelector(".custom-menu");
const customMenuItems = document.querySelectorAll(".custom-menu li");

customSidebarClose.addEventListener("click", () => customSidebar.classList.toggle("close"));

document.addEventListener('DOMContentLoaded', function() {
    // Récupérer tous les liens avec la classe 'custom-link'
    const links = document.querySelectorAll('.custom-link');

    // Obtenir l'URL actuelle pour comparer avec les liens
    const currentUrl = window.location.href;

    // Parcourir chaque lien et ajouter la classe 'active' au lien correspondant à l'URL actuelle
    links.forEach(link => {
        if (link.href === currentUrl) {
            link.classList.add('active');
        }
    });
});
