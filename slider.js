// Зацикленный горизонтальный слайдер:

// Слайдер вправо
let counter = 0;
let slides = $('.slider-line-item');
let firstSlide = $('.slider-line-item').eq(0).clone();
$('.slider-line').append(firstSlide);

$('.slider-button-right').click(function() {

    if (counter != slides.length - 1) {

        $('.slider-line').animate({
            'left' : (-100 * ++counter) + '%'
        }, 500);

    } else { 
        
        $('.slider-line').animate({
            'left' : (-100 * ++counter) + '%'
        }, 500, function () {
            $('.slider-line').css('left', 0);
        });
        counter = 0;
    }   
});

// Слайдер влево
$('.slider-button-left').click(function() {

    if (counter == 0) {
        counter = slides.length;

        $('.slider-line').animate({
            'left' : (-100 * counter) + '%'
        }, 0, function() {
            $('.slider-line').animate({
            'left' : (-100 * --counter) + '%'
            },500);
        });

    } else {

        $('.slider-line').animate({
            'left' : (-100 * --counter) + '%'
        },500);
    }  
});

// Открытие адаптивного меню (Урок 18)
let count = 0;

$('.menu-button').click(function() {
    count++;
    $('.menu-button div:nth-child(1)').toggleClass('first-stick');
    $('.menu-button div:nth-child(2)').toggleClass('second-stick');
    $('.menu-button div:nth-child(3)').toggleClass('third-stick');
    // $('.menu-adaptiv').toggleClass('menu-adaptiv-open');
    if (count % 2 == 0) {
        $('nav').animate({'left': '100%'}, 1000);
    } else {
        $('nav').animate({'left': 0}, 1000);
    } 
});