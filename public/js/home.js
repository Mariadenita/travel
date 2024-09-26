document.addEventListener("DOMContentLoaded", function () {
    const multipleItemCarousel = document.querySelector("#testimonialCarousel");

    if (window.matchMedia("(min-width:576px)").matches) {
        const carousel = new bootstrap.Carousel(multipleItemCarousel, {
            interval: false
        });

        const carouselInner = document.querySelector(".carousel-inner");
        const carouselItems = document.querySelectorAll(".carousel-item");
        const carouselWidth = carouselInner.scrollWidth;
        const cardWidth = carouselItems[0].offsetWidth;
        
        let scrollPosition = 0;

        const nextButton = document.querySelector(".carousel-control-next");
        const prevButton = document.querySelector(".carousel-control-prev");

        nextButton.addEventListener("click", function () {
            if (scrollPosition < carouselWidth - cardWidth * 3) {
                console.log("next");
                scrollPosition += cardWidth;
                carouselInner.scrollTo({
                    left: scrollPosition,
                    behavior: "smooth"
                });
            }
        });

        prevButton.addEventListener("click", function () {
            if (scrollPosition > 0) {
                scrollPosition -= cardWidth;
                carouselInner.scrollTo({
                    left: scrollPosition,
                    behavior: "smooth"
                });
            }
        });
    } else {
        multipleItemCarousel.classList.add("slide");
    }
});