document.addEventListener("DOMContentLoaded", () => {
    const toggle = document.querySelector(".theme-controller");
    const htmlElement = document.documentElement;

    const savedTheme = localStorage.getItem("theme") || "light";
    htmlElement.setAttribute("data-theme", savedTheme);

    if (toggle) {
        toggle.checked = savedTheme === "dark";

        toggle.addEventListener("change", function () {
            const theme = this.checked ? "dark" : "light";
            htmlElement.setAttribute("data-theme", theme);
            localStorage.setItem("theme", theme);
        });
    }
});
