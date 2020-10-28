(function($) { 
    "use strict";
    
    // Dark mode setter
    if (localStorage.getItem('dark-mode') !== null) {
        $('html').addClass('dark')
        $('.dark-mode-switcher').find('input').prop('checked', true)  
    }

    // Dark mode switcher
    $('.dark-mode-switcher').find('input').on('change', function() {
        if ($(this).is(':checked')) {
            localStorage.setItem('dark-mode', 'true')
        } else {
            localStorage.removeItem('dark-mode')
        }

        location.reload()
    })
})($)