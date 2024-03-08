//! Testimonial Slider Active Code
let testimonialsSlider = $("#testominialsSlider");
testimonialsSlider.owlCarousel({
	items: 1,
	dots: false,
	loop: true,
	pagination: false,
});
//? Custom Navigation Events
$(".customNavigation .prev").click(function () {
    testimonialsSlider.trigger("prev.owl.carousel");
});
$(".customNavigation .next").click(function () {
    testimonialsSlider.trigger("next.owl.carousel");
});

// Get the current URL
let currentUrl = window.location.href;

// Get all the anchor tags inside the navigation menu
let menuLinks = document.querySelectorAll('.header_right_content ul li a');

// Loop through the menu links and check if the link's href matches the current URL
menuLinks.forEach(function(link) {
	if (link.href === currentUrl) {
		link.classList.add('active_link'); // Add the "active_link" class to the current page's link
	}
});

//! Scroll to Top Active Code
$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('.scroll_to_top').fadeIn(); 
        } else { 
            $('.scroll_to_top').fadeOut(); 
        } 
    }); 
    $('.scroll_to_top').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});

//! Product Showcase Thumbnail Slider Active Code


//! What We Offer Slider Active Code
$("#whatWeOfferSlider").owlCarousel({
	loop: true,
	autoplay: true,
	autoplayTimeout: 5000,
	smartSpeed: 800,
	nav:true,
	navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
	dots: false,
	items: 1,
});

//! Single Product Image Zoom Effect Active Code


//! Product Increment to decrement 
const quantityInput = document.getElementById("quantity");
const incrementButton = document.querySelector(".q_inc");
const decrementButton = document.querySelector(".q_dec");

incrementButton.addEventListener("click", () => {
	quantityInput.stepUp();
});

decrementButton.addEventListener("click", () => {
	if (parseInt(quantityInput.value) > 0) {
		quantityInput.stepDown();
	}
}); 


