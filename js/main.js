//Banner Multitext
var typingEffect = new Typed(".multitext", {
    strings: ["Graphic Designing", "Poster Making", "Video Editing", "Logos", "Graphic Designing",],
    loop: true,
    typeSpeed: 100,
    backSpeed: 80,
    backDelay: 1500
});

// Banner slider 
$(document).ready(function () {
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
    });
});

// Projects Filter
//  Selecting all required elements
const filterItem = document.querySelector(".items");
const filterImg = document.querySelectorAll(".project");

window.onload = () => { // once window loaded 
    filterItem.onclick = (selectedItem) => { // when user clicked on filteritem div
        if(selectedItem.target.classList.contains("item")){  // if user click element has .item class
            filterItem.querySelector(".active").classList.remove("active"); //remove the active class which is in the first element
            selectedItem.target.classList.add("active"); //add that active class on the user selected element or item
            let filterName = selectedItem.target.getAttribute("data-name"); //getting data name value of the user selected item and storing in a filter name variable
            filterImg.forEach((image)=>{
                let filterImages = image.getAttribute("data-name");  // getting image data-name value
                // if user selected item data-name value is equal to image data-name value
                // or user selected item data-name value is equal to "all"
                if((filterImages == filterName) || filterName == "all"){
                    image.classList.remove("hide");
                    image.classList.add("show");
                } else{
                    image.classList.add("hide");
                    image.classList.remove("show");
                }
            });
        } 
    }
}

// Projects  Carousel
$(document).ready(function () {
    $('.projects').slick({
        dots: true, 
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        // nextArrow: $('.next'),
        // prevArrow: $('.prev'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});

// Counting Section
let valueDispalys = document.querySelectorAll(".num");
let interval = 5000;

valueDispalys.forEach((valueDispaly) => {
    let startValue = 0;
    let endValue = parseInt(valueDispaly.getAttribute("data-val"));
    let duration = Math.floor(interval / endValue);
    let counter = setInterval(function(){
        startValue += 1;
        valueDispaly.textContent = startValue;
        if(startValue == endValue){
            clearInterval(counter);
        }
    }, duration);
});


// TEAMS SECTION
$(document).ready(function () {
    $('.teams').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        nextArrow: $('.next'),
        prevArrow: $('.prev'),
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
});

// Testimonials Section
var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    loop:true,
    centeredSlides:true,
    slidesPerView:"auto",
    coverflowEffect:{
        rotate:0,
        stretch:0,
        depth:200,
        modifier:2, 
    },
    autoplay:true,
    keyboard:true,
    // mousewheel:true
    
});

function checkbox(){
    var check=document.getElementById("check")
    var change=document.getElementById('items-nav')
    

    if(check.checked==true){
        
        change.style.left=0;
    }else{
        change.style.left='-100%'

    }
}