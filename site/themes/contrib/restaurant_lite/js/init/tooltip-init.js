(function ($, Drupal, drupalSettings, once) {
  Drupal.behaviors.mtToolTip = {
    attach: function (context, settings) {
      once('mtToolTipInit', '[data-toggle="tooltip"]', context).forEach(element => $(element).tooltip());
    }
  };
})(jQuery, Drupal, drupalSettings, once);