// Frosted Glass Effect
const navbar = document.querySelector("nav");
const navbarImages = [...document.querySelectorAll("nav img")];

window.addEventListener("scroll", () => {
    const scrollY = window.scrollY;

    navbarImages.forEach(img => {
        img.style.transform = `translateY(${scrollY * -0.5}px)`;
    });
});
