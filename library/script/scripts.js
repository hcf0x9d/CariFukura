/*global $, console, ga*/

$(function () {
    'use strict';
    
    var dur, on, off;

    dur = 250;
    on = 1;
    off = 0.3;
    
    $('.social_item').mouseenter(function () {
        $(this).stop(true, true).fadeTo(dur, on).siblings().fadeTo(dur, off);
    });
    
    $('.social').mouseleave(function () {
        $('.social_item').stop(true, true).fadeTo(dur, on);
    });
});

/**
 * Google analytics event tracking tag.
 * @param   {String} category Category value for GA
 * @param   {String} action   Action value for GA
 * @param   {String} label    Label value for GA
 * @returns {Boolean}
 */
function gaTag(category, action, label) {
    'use strict';
    ga('send', 'event', category, action, label);
    console.log(category + ' | ' + action + ' | ' + label);
    return true;
}


function sendMail() {
    'use strict';
    
    console.log('mail');
}