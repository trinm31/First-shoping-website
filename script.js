$(document).ready(function() {

    // magnific-popup
    $('.parent-container').magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',

        gallery: {
            enabled: true
        }
        // other options
    });
});
$(function() {
    $('.carousel').carousel({
        interval: 6000
    });
});