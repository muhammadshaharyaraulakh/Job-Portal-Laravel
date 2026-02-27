document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("mobile-menu-btn");
    const menu = document.getElementById("mobile-menu");

    btn.addEventListener("click", () => {
        if (menu.style.display === "flex") {
            menu.style.display = "none";
            menu.classList.toggle("scale-y-0");
        } else {
            menu.style.display = "flex";

            menu.classList.toggle("scale-y-100");
        }
    });

    const passwordInput = document.getElementById("passwordInput");
    const toggleBtn = document.getElementById("togglePasswordBtn");

    if (!passwordInput || !toggleBtn) return;

    toggleBtn.addEventListener("click", () => {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleBtn.textContent = "Hide";
        } else {
            passwordInput.type = "password";
            toggleBtn.textContent = "Show";
        }
    });
    function toggleFilter(contentId, headerElement) {
        const content = document.getElementById(contentId);
        const icon = headerElement.querySelector(".rotate-icon");
        if (content.classList.contains("expanded")) {
            content.classList.remove("expanded");
            content.classList.add("collapsed");
            icon.classList.add("rotate-180");
        } else {
            content.classList.remove("collapsed");
            content.classList.add("expanded");
            icon.classList.remove("rotate-180");
        }
    }
    function expandAll() {
        const allContents = document.querySelectorAll(".filter-content");
        const allIcons = document.querySelectorAll(".rotate-icon");

        allContents.forEach((content) => {
            content.classList.remove("collapsed");
            content.classList.add("expanded");
        });

        allIcons.forEach((icon) => {
            icon.classList.remove("rotate-180");
        });
    }
});