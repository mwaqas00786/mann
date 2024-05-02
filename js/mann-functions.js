jQuery(document).ready(function() {
	jQuery('.navbar-nav').attr('id','navbarNavDropdown');
	// jQuery('div#navbarNavDropdown').addClass('navbar-collapse collapse');
	jQuery('#navbarNavDropdown > ul').addClass('navbar-nav');
	jQuery('#navbarNavDropdown > ul > li').addClass('nav-item');
	jQuery('#navbarNavDropdown > ul > li > a').addClass('nav-link style-link ');
	jQuery('.phn-number a').addClass('btn-number ');
	
});

window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrollToTopBtn").style.display = "block";
    } else {
        document.getElementById("scrollToTopBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document with animation
function topFunction() {
    // Scroll to the top with smooth animation
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

window.addEventListener('load', function() {
    var loader = document.querySelector('.site-loader');
    loader.style.display = 'none';
});