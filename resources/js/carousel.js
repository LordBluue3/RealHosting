const carousel = document.querySelector('.carousel');
const carouselProduct = document.querySelector('.carousel_product');
let isDragging = false;
let startX, startScrollLeft;

carousel.addEventListener("mousedown", (e)=>{
    isDragging = true;
    carousel.classList.add("dragging");
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
});

carousel.addEventListener("mousemove", (e)=>{
    if(!isDragging) return;
    carousel.scrollLeft =  startScrollLeft - (e.pageX - startX);
    
});

document.addEventListener("mouseup", ()=>{
    isDragging = false;
    carousel.classList.remove("dragging");
});

//Carousel Product

carouselProduct.addEventListener("mousedown", (e)=>{
    isDragging = true;
    carouselProduct.classList.add("dragging");
    startX = e.pageX;
    startScrollLeft = carouselProduct.scrollLeft;
});

carouselProduct.addEventListener("mousemove", (e)=>{
    if(!isDragging) return;
    carouselProduct.scrollLeft =  startScrollLeft - (e.pageX - startX);
    
});

document.addEventListener("mouseup", ()=>{
    isDragging = false;
    carouselProduct.classList.remove("dragging");
});