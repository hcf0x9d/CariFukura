/*global $, console, ga*/

$(function () {
    'use strict';
    
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