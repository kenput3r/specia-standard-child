console.log('Hello from functions.js');

jQuery.noConflict();
(function($) {
    //if homepage, remove .specia-icon & .fa from service icons and replace with .specia-child-icon
    //add star classes to blog section title
    var is_home = $('body').hasClass('home');
    if(is_home) {
        $('.service-version-one .service-icon .specia-icon').addClass('specia-child-icon').removeClass('fa specia-icon');
        $('.latest-blog .section-heading i').addClass('fas fa-star');
    }
})(jQuery);