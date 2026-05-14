const header = document.querySelector("#siteHeader");

const syncHeaderState = () => {
    if (!header) {
        return;
    }

    header.classList.toggle("is-sticky", window.scrollY > 24);
};

syncHeaderState();
window.addEventListener("scroll", syncHeaderState, { passive: true });

const revealItems = document.querySelectorAll("[data-reveal]");

revealItems.forEach((element, index) => {
    element.style.transitionDelay = `${index * 70}ms`;
});

if ("IntersectionObserver" in window) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.15 });

    revealItems.forEach((element) => observer.observe(element));
} else {
    revealItems.forEach((element) => element.classList.add("is-visible"));
}
