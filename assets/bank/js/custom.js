(function ($) {
    "use strict";


    /*
    * Preloader
    * */
    $(window).on('load', function () {
        $('#status').fadeOut();
        $('#preloader').delay(500).fadeOut('slow');
        $('body').delay(500).css({'overflow': 'visible'});
    });


    /*
    * Mega menu
    * */
    $('#mobile-menu-toggler').on('click', function(e) {
        e.preventDefault();
        $('.primary-menu > ul').slideToggle();
    });

    $('nav.primary-menu  .has-menu-child').append('<i class="menu-dropdown fas fa-angle-down"></i>');

    if ($(window).width() <= 991) {
        $('.menu-dropdown').on('click', function() {
            $(this).prev().slideToggle('slow');
            $(this).toggleClass('fa-angle-down fa-angle-up')
        });
    }

    /*
    * Tooltip
    * */
    $('[data-toggle=\'tooltip\']').tooltip({container: 'body'});

     /*
     * accordion
     * */
    var pbtn = $('.pbtn');
    $(pbtn).on('click', function(e) {
        $(pbtn).removeClass('disabled')
        $(this).addClass('disabled')
        var battr = $(this).attr('data-id');
        $('.accord').slideUp();
        $('#' + battr).slideDown();
        e.preventDefault();
    });
    $('.close').on('click', function(e) {
        $(pbtn).removeClass('disabled')
        $('.accord').slideUp();
        e.preventDefault();
    });
    $('.load-more-btn').on('click', function(e) {
        e.preventDefault();
        $(this).toggleClass('active')
        $('.trancstion-more').slideToggle();
        $(this).find('i').toggleClass('fa-chevron-up');
        if($(this).hasClass('active')){
            $(this).find('span').text('Show less');
        }else{
            $(this).find('span').text('Show more');
        }
    });
    $('.single-payment, .single-contact').on('click', function() {
        $('.single-payment, .single-contact').removeClass('selected');
        $(this).addClass('selected');
    })
    /*
    * Button effect
    * */
    $('.btn')
        .on('mouseenter mousemove', function (e) {
            var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
            $(this).find('.bh').css({top: relY, left: relX});
            var origin = relX + 'px' + ' ' + relY + 'px';

        })
        .on('mouseout', function (e) {
            var parentOffset = $(this).offset(),
                relX = e.pageX - parentOffset.left,
                relY = e.pageY - parentOffset.top;
            $(this).find('.bh').css({top: relY, left: relX})
        });
    /*
    * Button effect
    * */
    if ($('#birthDate').length > 0) {
        $('#birthDate').daterangepicker({
            singleDatePicker: true,
            "showDropdowns": true,
            autoUpdateInput: false,
            maxDate: moment().add(0, 'days'),
        }, function (chosen_date) {
            $('#birthDate').val(chosen_date.format('MM-DD-YYYY'));
        });
    }

/*
     * date range
     * */

    if ($('#custom-date').length > 0) {
        $(function() {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function customDateFunction(start, end) {
                $('#custom-date span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('#custom-date').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, customDateFunction);
            customDateFunction(start, end);
        });
    }

    

	if ($('#paymentDue').length > 0) {
		// Payment due by
		$('#paymentDue').daterangepicker({
			singleDatePicker: true,
			minDate: moment(),
			autoUpdateInput: false,
		}, function(chosen_date) {
			$('#paymentDue').val(chosen_date.format('MM-DD-YYYY'));
		});
	}

    //======================
    // More Item function
    //======================
    function moreItem(selector, receiver) {
        var tele = document.getElementById(selector),
            rec = document.getElementById(receiver);
        // window.onresize = resize;
        // resize();

        $(window).on('resize', function() {
            resize();
        })
        resize();

        function resize() {
            const rChildren = rec.children;
            let numW = 0;

            [...rChildren].forEach(item => {
                item.outHTML = '';
                tele.appendChild(item);
            })

            const teleW = tele.offsetWidth,
                tChildren = tele.children;

            [...tChildren].forEach(item => {
                numW += item.offsetWidth;

                if (numW > teleW) {
                    item.outHTML = '';
                    rec.appendChild(item);
                }
            });
        }
    }

    if ($('#teleporter').length > 0) {
        moreItem('teleporter', 'receiver')
    }


    $('.langbtn').on('click', function(e) {
        if ($(this).find('i').hasClass('ti-angle-down')) {
            $(this).find('i').removeClass('ti-angle-down')
            $(this).find('i').addClass('ti-angle-up')
            console.log('wo');
        } else {
            $(this).find('i').addClass('ti-angle-down')
            $(this).find('i').removeClass('ti-angle-up')
        }
        $('ul.list-unstyled.dropdown-menu').slideToggle();
        e.preventDefault();
    });

})(jQuery);