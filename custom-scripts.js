// js/custom-scripts.js

jQuery(document).ready(function($) {
    $('.dropdown-toggle').click(function() {
      let location = $(this).attr('href');
      window.location.href = location;
      return false;
    });
  });
  