// Add your JS customizations here
jQuery(document).ready(function($) {
    // Check if there's a dropdown menu
    if ($('.dropdown-menu').length > 0) {
      // Make parent menu items clickable
      $('.menu-item-has-children > a').on('click', function() {
        window.location = $(this).attr('href');
      });
    }
  });