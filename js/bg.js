(function ($) {
    Drupal.behaviors.mybg = {
        attach: function (context) {
            $('.profile').css('background-image',Drupal.settings.mybartik_mybgimg);
//            alert(Drupal.settings.mybartik_mybg);
        }
    };
})(jQuery);