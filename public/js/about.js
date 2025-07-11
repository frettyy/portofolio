// Pastikan ini dijalankan setelah DOM dimuat
document.addEventListener("DOMContentLoaded", () => {
    // Inisialisasi Lucide Icons (diasumsikan sudah dimuat di HTML)
    if (typeof lucide !== "undefined") {
        lucide.createIcons();
    } else {
        console.warn(
            "Lucide library not loaded. Check the script tag in HTML."
        );
    }

    // Animasi muncul saat elemen masuk ke viewport
    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("fade-in");
                    observer.unobserve(entry.target); // Hentikan observasi setelah animasi
                }
            });
        },
        { threshold: 0.1 }
    );

    const elementsToObserve = document.querySelectorAll(
        ".text-block, .text, .social-icon"
    );
    if (elementsToObserve.length > 0) {
        elementsToObserve.forEach((element) => {
            observer.observe(element);
        });
    } else {
        console.warn(
            "No elements found with classes: .text-block, .text, .social-icon"
        );
    }

    // Penyesuaian responsif untuk navbar
    function handleResize() {
        const navMenu = document.querySelector(".nav-menu");
        if (navMenu) {
            if (window.innerWidth <= 768) {
                navMenu.style.display = "none"; // Sembunyikan menu di layar kecil
                navMenu.classList.add("mobile-menu");
            } else {
                navMenu.style.display = "flex";
                navMenu.classList.remove("mobile-menu");
            }
        } else {
            console.warn("Nav menu not found.");
        }
    }

    // Toggle menu untuk mobile
    const brand = document.querySelector(".brand");
    if (brand) {
        brand.addEventListener("click", () => {
            const navMenu = document.querySelector(".nav-menu");
            if (navMenu && window.innerWidth <= 768) {
                if (navMenu.style.display === "none") {
                    navMenu.style.display = "flex";
                    navMenu.style.flexDirection = "column";
                    navMenu.style.position = "absolute";
                    navMenu.style.top = "60px";
                    navMenu.style.right = "20px";
                    navMenu.style.background = "#fff";
                    navMenu.style.padding = "10px";
                    navMenu.style.borderRadius = "5px";
                    navMenu.style.boxShadow = "0 2px 10px rgba(0, 0, 0, 0.1)";
                } else {
                    navMenu.style.display = "none";
                }
            }
        });
    } else {
        console.warn("Brand element not found.");
    }

    // Panggil fungsi saat halaman dimuat dan di-resize
    window.addEventListener("load", handleResize);
    window.addEventListener("resize", handleResize);

    // Tambahkan animasi halus saat mengarahkan kursor ke ikon sosial
    const socialIcons = document.querySelectorAll(".social-icon");
    if (socialIcons.length > 0) {
        socialIcons.forEach((icon) => {
            icon.addEventListener("mouseenter", () => {
                icon.style.transform = "translateY(-5px) scale(1.2)";
            });
            icon.addEventListener("mouseleave", () => {
                icon.style.transform = "translateY(0) scale(1)";
            });
        });
    } else {
        console.warn("No social icons found.");
    }
});
