const carousel = document.querySelector('.carousel');
const carouselProduct = document.querySelector('.carousel_product');
const carouselTestimony = document.querySelector('.carousel_testimony');
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

//Carousel Testimony

carouselTestimony.addEventListener("mousedown", (e)=>{
    isDragging = true;
    carouselTestimony.classList.add("dragging");
    startX = e.pageX;
    startScrollLeft = carouselTestimony.scrollLeft;
});

carouselTestimony.addEventListener("mousemove", (e)=>{
    if(!isDragging) return;
    carouselTestimony.scrollLeft =  startScrollLeft - (e.pageX - startX);
    
});

document.addEventListener("mouseup", ()=>{
    isDragging = false;
    carouselTestimony.classList.remove("dragging");
});