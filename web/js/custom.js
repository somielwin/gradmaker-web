var windowWidth = 0;
var windowHeight = 0;

function resize() {
	windowWidth = $(window).outerWidth();
	windowHeight = $(window).outerHeight();

	// STICKY FOOTER
	var headerHeight = $('header').outerHeight();
	var footerHeight = $('footer').outerHeight();
	var footerTop = (footerHeight) * -1
	$('footer').css({marginTop: footerTop});
	$('#main-wrapper').css({paddingBottom: footerHeight});

	// for vertically middle content
	$('.bp-middle').each(function() {
		var bpMiddleHeight = $(this).outerHeight() / 2 * - 1;
		$(this).css({marginTop: bpMiddleHeight});
	});

	// for equalizer
	// $('.classname').css({minHeight: 0});
	// var ClassName = get_biggest($('.classname'));
	// $('.classname').css({minHeight: ClassName});

	if($(window).width() < 768) {
		$('#dream-carousel').remove();
	} else {
		
		$('#dream-carousel-mobile').remove();

	}
}

$(window).resize(function() {
	resize();

});

$(document).ready(function() {
	
	$('.sn-menu ul li a').click(function(e){
		e.preventDefault();

		var _this = $(this);
		$targetDiv = $(_this.attr('href'));
		$('.sn-menu ul li').removeClass('active');
		_this.closest('li').addClass('active');
		scrollToDiv($targetDiv, 0);
        
	});

	$('.header-hamburger').click(function(e){
		e.preventDefault();
        var _this = $(this);
        
        $('.mobile-menu').toggleClass('active');
            _this.toggleClass('active');
    });

    $('.btn-early-access').click(function(e){
    	e.preventDefault();
    	var wH = $('header').outerHeight(false);
    	$("html, body").animate({ scrollTop: $('#section7').offset().top - (wH - 2) }, 700);
    });

    $('.btn-get-app, .btn-start').click(function(e){
    	e.preventDefault();
    	var wH = $('header').outerHeight(false);
    	$("html, body").animate({ scrollTop: $('#section7').offset().top - (wH - 2) }, 700);
    });


    $('#access-form').submit(function(e){
        $('.input-wrap').addClass('error');
        isvalidate = false;

        if( IsEmail($('#email-account').val() )) {
            $('#email-account').closest('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if( !$('#last-name').val() == '') {
            $('#last-name').closest('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if( !$('#first-name').val() == '') {
            $('#first-name').closest('.input-wrap').removeClass('error');
            isvalidate = true;
        } else {
            isvalidate = false;
        }

        if(!$('#contact-num').val() == '' && $('#contact-num').val().length >= 6) {
        	$('#contact-num').closest('.input-wrap').removeClass('error');
        	isvalidate = true;
        } else {
        	isvalidate = false;
        }

        if( IsEmail($('#email-account').val()) && !$('#last-name').val() == '' && !$('#first-name').val() == '' && $('#contact-num').val().length >= 6 && $('#contact-num').val() != '' && isvalidate == true) {

        	e.preventDefault();
        	// $('#email-account').val('')
        	// $('#last-name').val('')
        	// $('#first-name').val('')
        	// $('#contact-num').val('')
        	$('.ty-message').addClass('active');
        } else {
        	e.preventDefault();
        }

    });


});

$(window).load(function() {
	resize();
});

$(window).on('mousewheel DOMMouseScroll load', function(e) {
    updateNav();
});

function scrollToDiv(element) {
    var offset = element.offset();
    var offsetTop = offset.top;
    var totalScroll = offsetTop;
    var headerH = $('.sec-menu-wrap').outerHeight(false);
    $('body, html').animate({
        scrollTop: totalScroll - 72
    }, 500);
}

function updateNav() {
    var wH = window.innerHeight ? window.innerHeight : $(window).height(),
        headerH = $('header').outerHeight(false),
        curPos = $(window).scrollTop() + headerH,
        currentHash,
        subMenu = $('.sn-menu'),
        liItems = subMenu.find('li');

    $('.jq-section').each(function(i, v) {
        if ($(this).offset().top <= curPos) {
            currentHash = liItems.find('a[href="#' + $(this).attr('id') + '"]');
            liItems.children('a').parent('li').removeClass('active');
            currentHash.parent('li').addClass('active');
        }

    });
}

function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
