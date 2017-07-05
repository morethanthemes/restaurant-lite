(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.mtToolTip = {
    attach: function (context, settings) {
		  $(context).find('[data-toggle="tooltip"]').once('mtToolTipInit').tooltip();
    }
  };
})(jQuery, Drupal, drupalSettings);
