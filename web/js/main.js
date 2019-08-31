$(document).ready(function () {

    new WOW().init();

    $('#one').hover(function () {
        $('.rocket').toggleClass('visible', 'unvisible')
    })
    $('#two').hover(function () {
        $('.ielts').toggleClass('visible', 'unvisible')
    });

    $('.team-slider').slick({
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 3,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: false,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: false,
                    slidesToShow: 2
                }
            }
        ]
    });

    $('.comment-slider').slick({
        autoplay: false,
        autoplaySpeed: 3000,
        dots: true,
        infinite: false,
        speed: 300,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 992,
            settings: {
                arrows: false
            }
        }]
    });


    $('input, textarea').focus(function () {
        $(this).parents('.form-group').addClass('focused');
    });

    $('input, textarea').blur(function () {
        var inputValue = $(this).val();
        if (inputValue == "") {
            $(this).removeClass('filled');
            $(this).parents('.form-group').removeClass('focused');
        } else {
            $(this).addClass('filled');
        }
    })


    $('.content').readmore({
        speed: 1500,
        moreLink: '<a href="#" class="learn-more">Learn more <span><img src="src/img/icons/test-chevron-down.png"></span></a>',
        lessLink: '<a href="#" class="learn-less">Learn more <span><img src="src/img/icons/test-chevron-up.png"></span></a>'
    });

    $('form').on('submit', function () {
        var valid = true;
        $(this).find('input').each(function (i) {
            if (!$(this).val()) {
                $(this).focus();
                valid = false;
                return false
            }
        });
        return valid;
    });


    // play video
    $('.video-button').click(function () {
        $('#thompson-video').get(0).play();
    });

    $('#video-modal').on('hidden.bs.modal', function () {
        $('#thompson-video').get(0).pause();
    });


    // change position of the category arrow
    $('.first').click(function () {
        $('#category-wheel .inner-circle').css({ 'transform': 'translate(-50%, -50%) rotate(-32deg)' });
    });
    $('.second').click(function () {
        $('#category-wheel .inner-circle').css({ 'transform': 'translate(-50%, -50%) rotate(-55deg)' });
    });
    $('.third').click(function () {
        $('#category-wheel .inner-circle').css({ 'transform': 'translate(-50%, -50%) rotate(-90deg)' });
    });
    $('.fourth').click(function () {
        $('#category-wheel .inner-circle').css({ 'transform': 'translate(-50%, -50%) rotate(-122deg)' });
    });
    $('.fiveth').click(function () {
        $('#category-wheel .inner-circle').css({ 'transform': 'translate(-50%, -50%) rotate(-148deg)' });
    });


    // scroll down on section's bottom click
    $('.section-bottom').click(function () {
        var section = $(this).parents('section').next();
        var top = section.position().top - 50;
        $("body, html").animate({
            scrollTop: top
        }, 300);
    });
    
});


function getData(evt, category, qty) {

    $('#courses .category').hide();
    $('#courses .' + category).show();

    if (!$('#courses .' + category).hasClass('slick-slider')) {
        if ($(document).width() > 992) {
            $('#courses .' + category).slick({
                autoplay: false,
                autoplaySpeed: 3000,
                dots: true,
                infinite: false,
                speed: 300,
                arrows: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                vertical: false,
                responsive: [{
                    breakpoint: 992,
                    settings: {
                        mobileFirst: true,
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        vertical: false
                    },
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        vertical: true
                    }
                }]
            });
        }
    }
    

    if (!evt) {
        // Show amount of corses in a category
        var course_word = 'course';
        if (qty > 1) {
            course_word = 'courses';
        }
        $('.course-amount').text(qty + ' ' + course_word);
        return true;
    } else {
        // Change opacity 1 of the first category to 0.7
        $('.first').css({ 'opacity': '0.7' });

        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent-item");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace("active", "");
        }

        // Show the current tab, and add an "active" class to the link that opened the tab
        document.getElementById(category).style.display = "block";
        evt.currentTarget.className += " active";

        // Show amount of corses in a category
        var course_word = 'course';
        if (qty > 1) {
            course_word = 'courses';
        }
        $('.course-amount').text(qty + ' ' + course_word);
    }

}

getData(false, 'intensiveEnglish', 6);


// course arrow animation
$('#two').click(function () {
    $('.course-arrow').attr('style', 'bottom: -25px; left: 12px; transform: rotate(121deg)');

});


// moution of scrolling down
$('#why .video-button').mouseover(function () {
    $('#why .circle-wrapper').css({ 'transform': 'scale(1.2)' });
});
$('#why .video-button').mouseout(function () {
    $('#why .circle-wrapper').css({ 'transform': 'scale(1)' });
});

// Fixed nav bg changing
if ($(this).scrollTop() > 100) {
    $('.nav-container').css({ 'background': '#a61d31' });
} else {
    $('.nav-container').css({ 'background': 'transparent' });
}
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.nav-container').css({ 'background': '#a61d31' });
    } else {
        $('.nav-container').css({ 'background': 'transparent' });
    }
});
