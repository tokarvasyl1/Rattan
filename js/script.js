$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:true,
            loop:false
        }
    }
})

let isMobile = {
    Android: function() {return navigator.userAgent.match(/Android/i);},
    BlackBerry: function() {return navigator.userAgent.match(/BlackBerry/i);},
    iOS: function() {return navigator.userAgent.match(/iPhone|iPad|iPod/i);},
    Opera: function() {return navigator.userAgent.match(/Opera Mini/i);},
    Windows: function() {return navigator.userAgent.match(/IEMobile/i);},
    any: function() {return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());}
};
let body=document.querySelector('body');
if(isMobile.any()){
    body.classList.add('touch');
    let arrow=document.querySelectorAll('.arrow');
    for(i=0; i<arrow.length; i++){
        let thisLink=arrow[i].previousElementSibling;
        let subMenu=arrow[i].nextElementSibling;
        let thisArrow=arrow[i];

        thisLink.classList.add('parent');
        arrow[i].addEventListener('click', function(){
            subMenu.classList.toggle('open');
            thisArrow.classList.toggle('active');
        });
    }
}else{
    body.classList.add('mouse');
}


$(document).ready(function (){
    $('.header_burger').click(function(event) {
        $('.header_burger,.menu').toggleClass('active');
        $('body').toggleClass('lock');
    })
})


$(document).ready(function (){

    $('.slider-main').slick({
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        asNavFor: '.slider-little'
    });
    $('.slider-little').slick({
        arrows: false,
        adaptiveHeight: true,
        slidesToShow: 3,
        asNavFor: '.slider-main',
        centerMode: true,
        focusOnSelect: true,
        centerPadding: false

    });
})




function increaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
}

function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
}






