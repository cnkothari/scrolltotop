/**
 * CNTechnoLabs
 * Copyright (C) 2023 CNTechnoLabs 
 *
 * @category  CNTechnoLabs
 * @package   CNTechnoLabs_ScrollTop
 * @copyright Copyright (c) 2023 CNTechnoLabs
 * @license   http://opensource.org/licenses/gpl-3.0.html GNU General Public License,version 3 (GPL-3.0)
 * @author    CNTechnoLabs
 */

// app/code/YourVendor/YourModule/view/frontend/web/js/scrolltop.js

require(['jquery'], function($) {
    'use strict';

    $(document).ready(function () {
        // Add click event to the scroll-to-top button
        $('#scrolltop').click(function () {
            $('html, body').animate({ scrollTop: 0 }, 'slow');
            return false;
        });

        // Show/hide the scroll-to-top button based on scroll position
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#scrolltop').fadeIn();
            } else {
                $('#scrolltop').fadeOut();
            }
        });
    });
});
