const carousel = document.querySelector(".carousel");
const carouselProduct = document.querySelector(".carousel_product");
const carouselTestimony = document.querySelector(".carousel_testimony");

function setupCarousel(carousel) {
    let isDragging = false;
    let startX, startScrollLeft;
    carousel.addEventListener("mousedown", (e) => {
        isDragging = true;
        carousel.classList.add("dragging");
        startX = e.pageX;
        startScrollLeft = carousel.scrollLeft;
    });

    carousel.addEventListener("mousemove", (e) => {
        if (!isDragging) return;
        carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
    });

    document.addEventListener("mouseup", () => {
        isDragging = false;
        carousel.classList.remove("dragging");
    });
}

setupCarousel(carousel)
setupCarousel(carouselProduct)
setupCarousel(carouselTestimony)