console.log('Hello from functions.js');

//if homepage, remove .specia-icon & .fa from service icons and replace with .specia-child-icon
var is_home = $('body').hasClass('home');

if(is_home) {
    console.log('Welcom home');
    $('.service-version-one .service-icon .specia-icon').addClass('specia-child-icon').removeClass('fa specia-icon');
}