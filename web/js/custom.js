var windowWidth = 0;
var windowHeight = 0;

var isScrollingAllowed = true;
var win = $(window);
var doc = $(document);


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

    //smoothScroll();

    $(document).keydown(function(e){
       
        if(e.keyCode == 27) {
            $('.popup-wrap').removeClass('active');
        }
    });

    if($(window).width() >  768) {
        $('.animated').appear(function() {
            var element = $(this);
            var animation = element.data('animation');
            var animationDelay = element.data('delay');
            if(animationDelay) {
              setTimeout(function(){
                  element.addClass( animation + " visible" );
                  element.removeClass('hiding');
              }, animationDelay);
            } else {
              element.addClass( animation + " visible" );
              element.removeClass('hiding');
            }               
        }, {accY: -90});
    } else {
        $('.hiding').css({'opacity' : 1});
    }

    // Lazyload image
    if($('.lazyload').length > 0 ){

        $('.lazyload').unveil(200, function() {
            $(this).load(function() {
                this.style.opacity = 1;
            });
        });

    }

	$('.header-hamburger').click(function(e){
		e.preventDefault();
        var _this = $(this);
        
        $('.mobile-menu').toggleClass('active');
            _this.toggleClass('active');
    });


    $('#term-checkbox').change(function(){
        
        //$('.fill-up-correctly').removeClass('is-open');

        if( $('#terms-checkbox').is(':checked')) {
            $('#terms-checkbox').closest('.custom-checkbox').removeClass('error')

        } else {
            $('#terms-checkbox').closest('.custom-checkbox').addClass('error');
        }

    });

    $('#access-form').submit(function(e){
        e.preventDefault();
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

        if( $('#term-checkbox').prop('checked')) {
            $('#term-checkbox').closest('.custom-checkbox').removeClass('error')
            isvalidate = true;
        } else {
            $('#term-checkbox').closest('.custom-checkbox').addClass('error');
            isvalidate = false;
        }

        if( IsEmail($('#email-account').val()) && !$('#last-name').val() == '' && !$('#first-name').val() == '' && $('#contact-num').val().length >= 6 && $('#contact-num').val() != ''  && isvalidate == true) {
        	
        	// $('#email-account').val('')
        	// $('#last-name').val('')
        	// $('#first-name').val('')
        	// $('#contact-num').val('')
            $('.wavy-loader').css({'opacity' : 1});
            //$('.slot-num').html(remainingSlot);

        	$('.ty-message').addClass('active');

            submitForm();
            return false;
        } else {
        	e.preventDefault();
        }

    });

});

function submitForm()
{
    //do the counter diff
    //do not remove
    //you can add this inside the ajax success
    var data = new FormData();
    data.append("data" , "1");
    var xhr = (window.XMLHttpRequest) ? new XMLHttpRequest() : new activeXObject("Microsoft.XMLHTTP");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == XMLHttpRequest.DONE) {
            $('.slot-num').text(xhr.responseText);
            console.log(xhr.responseText)
        }
    };
    xhr.open( 'post', '/process.php', true );
    var res = xhr.send(data);

    // on success
    // NOTE: You can add this inside your success ajax or after submitting the form. We just add temporarily a timeout for test
    setTimeout( function() {

        //clear data
        $('#email-account').val('');
        $('#last-name').val('');
        $('#first-name').val('');
        $('#contact-num').val('');
        $('#term-checkbox').prop('checked', false);
        //remove loader
        $('.wavy-loader').css({'opacity' : 0});
    }, 800);
}


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

           

            // if(currentHash.parent('li:nth-child(4)').hasClass('active')) {
            //     $('.sn-menu').addClass('sn-green');

            // } 
            // else if(currentHash.parent('li:nth-child(6)').hasClass('active')) {    
            //     $('.sn-menu').addClass('sn-green');

            // } else if(currentHash.parent('li:nth-child(8)').hasClass('active')) {    
            //     $('.sn-menu').addClass('sn-green');
            // } 
            // else {
            //     $('.sn-menu').removeClass('sn-green');
            // }   
        }

    });
}

function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function smoothScroll() {
    var scrollTime = 1;
    var scrollDistance = 150;

    $(window).on("mousewheel DOMMouseScroll", function(event) {
        event.preventDefault();
        if (isScrollingAllowed) {

            // var delta = event.originalEvent.wheelDelta / 120 || -event.originalEvent.detail / 3;
            var delta = ( Math.abs(event.originalEvent.wheelDelta) < 120 ? event.originalEvent.wheelDelta / 30 : event.originalEvent.wheelDelta / 120 ) || -event.originalEvent.detail;
            var scrollTop = win.scrollTop();
            var finalScroll = scrollTop - parseInt(delta * scrollDistance);

            TweenMax.to(win, scrollTime, {
                scrollTo: { y: finalScroll, autoKill: true },
                ease: Power4.easeOut,
                autoKill: true,
                overwrite: 5
            });
        }
    });

}
