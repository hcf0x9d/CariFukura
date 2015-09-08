/*global $, console, ga*/

$(function () {
    'use strict';

    var $allVideos = $("iframe[src^='https://player.vimeo.com']"),
        $fluidEl = $("figure.sample_item");
    
    $allVideos.each(function () {
        $(this).attr('data-aspectRatio', this.height / this.width).removeAttr('height').removeAttr('width');
        console.log(this.height, this.width);
    });

    $(window).resize(function () {

        var newWidth = $fluidEl.width();
        $allVideos.each(function () {

            var $el = $(this);
            $el.width(newWidth).height(newWidth * $el.attr('data-aspectRatio'));

        });

    }).resize();
    
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
