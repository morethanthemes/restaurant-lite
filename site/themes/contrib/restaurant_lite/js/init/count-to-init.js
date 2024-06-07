(function ($, Drupal, drupalSettings, once) {
  Drupal.behaviors.mtCountTo = {
    attach: function (context, settings) {
      once('mtCountToInit', '[data-to]', context).forEach(function(item) {
        var stat_item = $(item);
        var waypoints = stat_item.waypoint(function(direction) {
          var animatedObject = $(this.element);
            animatedObject.countTo();
            this.destroy();
          },{
            offset: "90%"
          });
      });
    }
  };
})(jQuery, Drupal, drupalSettings, once);
