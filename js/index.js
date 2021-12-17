


$(window).on("scroll", function() {
    var scrollPos = $(window).scrollTop();
    if (scrollPos <= 100) {
        $('.mainNav').removeClass('bg-white');
        $('.mainNav').removeClass('shadow-sm');
        $('.sign-in').removeClass('top-of-page');
        $('.sign-up').removeClass('top-of-page');
        $('.sign-btn').removeClass('top-of-page');
        $('.mainNav').addClass('top-of-page');
        $('.mainNav').addClass('bg-transparent');
    } else {
        $('.mainNav').removeClass('top-of-page');
        $('.mainNav').removeClass('bg-transparent');
        $('.mainNav').addClass('bg-white');
        $('.mainNav').addClass('shadow-sm');
        $('.sign-in').addClass('top-of-page');
        $('.sign-up').addClass('top-of-page');
        $('.sign-btn').addClass('top-of-page');

    }
});


function validation()
{
    var id=document.f1.user.value;
    var ps=document.f1.pass.value;
    if(id.length=="" && ps.length=="") {
        alert("User Name and Password fields are empty");
        return false;
    }
    else
    {
        if(id.length=="") {
            alert("User Name is empty");
            return false;
        }
        if (ps.length=="") {
            alert("Password field is empty");
            return false;
        }
    }
}

window.addEventListener('DOMContentLoaded', event => {

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});
