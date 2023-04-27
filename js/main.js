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


//////////// Projects Page ///////////////
let selectMenu = document.querySelector("#products");
let category = document.querySelector(".right h2");
let container = document.querySelector(".product-wrapper");

selectMenu.addEventListener("change", function(){
	let categoryName = this.value;
	category.innerHTML = this[this.selectedIndex].text;  

	let http = new XMLHttpRequest();
	http.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			let response = JSON.parse(this.responseText);
			// let response = this.responseText;
			let out = "";
			for(let item of response){
				out += `
					<div class="product">
						<div class="left">
							<img src="${item.image}" alt="">
						</div>
						<div class="right">
							<p class="title">${item.title}</p>
							<p class="price">${item.developer}</p>
							<p class="description">${item.description}</p>
						</div>
					</div>
				`;
			}
			container.innerHTML = out;
		};
	}	
	http.open('POST', "script.php", true);
	http.setRequestHeader("content-type", "application/x-www-form-urlencoded");
	http.send("category="+categoryName);
});