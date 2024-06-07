<?php

function restaurant_lite_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['#attached']['library'][] = 'restaurant_lite/theme-settings';

  $form['mtt_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('MtT Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );

  $form['mtt_settings']['tabs'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'basic_tab',
  );

  $form['mtt_settings']['basic_tab']['basic_settings'] = array(
    '#type' => 'details',
    '#title' => t('Basic Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['breadcrumb_separator'] = array(
    '#type' => 'textfield',
    '#title' => t('Breadcrumb separator'),
    '#description'   => t('Enter the class of the icon you want from the Font Awesome library e.g.: fa-angle-right. A list of the available classes is provided here: <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet" target="_blank">http://fortawesome.github.io/Font-Awesome/cheatsheet</a>.'),
    '#default_value' => theme_get_setting('breadcrumb_separator', 'restaurant_lite'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['scrolltop'] = array(
    '#type' => 'fieldset',
    '#title' => t('Scroll to top'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['scrolltop']['scroll_to_top_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show scroll to top button'),
    '#description'   => t('Use the checkbox to enable or disable scroll-to-top button.'),
    '#default_value' => theme_get_setting('scroll_to_top_display', 'restaurant_lite'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['scrolltop']['scroll_to_top_icon'] = array(
    '#type' => 'textfield',
    '#title' => t('Scroll to top icon'),
    '#description'   => t('Enter the class of the icon you want from the Font Awesome library e.g.: fa-long-arrow-up. A list of the available classes is provided here: <a href="http://fortawesome.github.io/Font-Awesome/cheatsheet" target="_blank">http://fortawesome.github.io/Font-Awesome/cheatsheet</a>.'),
    '#default_value' => theme_get_setting('scroll_to_top_icon','restaurant_lite'),
    '#size'          => 20,
    '#maxlength'     => 100,
  );

  $form['mtt_settings']['bootstrap_tab']['bootstrap'] = array(
    '#type' => 'details',
    '#title' => t('Bootstrap'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['bootstrap_tab']['bootstrap']['bootstrap_remote_type'] = array(
    '#type' => 'select',
    '#title' => t('Select the remote type'),
    '#description'   => t('From the drop down select box, select how to load the Bootstrap library. If you select "Local" make sure that you download and place Bootstrap folder into the root theme folder (restaurant_lite/bootstrap).'),
    '#default_value' => theme_get_setting('bootstrap_remote_type', 'restaurant_lite'),
    '#options' => array(
    'local' => t('Local / No remote'),
    'cdn' => t('CDN'),
    ),
  );

  $form['mtt_settings']['looknfeel_tab']['looknfeel'] = array(
    '#type' => 'details',
    '#title' => t('Look\'n\'Feel'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['looknfeel_tab']['looknfeel']['premium-description'] = array(
  '#type' => 'item',
   '#markup' =>
   '<div class="theme-settings-title">'.t("Available in the Premium version of this theme").'</div>
   <div class="theme-settings-image-wrapper">
   <a href="http://morethanthemes.com/themes/restaurantplus" target="_blank">
   <img src="' . base_path() . \Drupal::service('extension.path.resolver')->getPath('theme', 'restaurant_lite') . '/images/premium-01-looknfeel.jpg" />
   </a></div> ',
  );

  $form['mtt_settings']['regions_tab']['regions'] = array(
    '#type' => 'details',
    '#title' => t('Region settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['regions_tab']['regions']['premium-description'] = array(
  '#type' => 'item',
   '#markup' =>
   '<div class="theme-settings-title">'.t("Available in the Premium version of this theme").'</div>
   <div class="theme-settings-image-wrapper">
   <a href="http://morethanthemes.com/themes/restaurantplus" target="_blank">
   <img src="' . base_path() . \Drupal::service('extension.path.resolver')->getPath('theme', 'restaurant_lite') . '/images/premium-02-region.jpg" />
   </a></div> ',
  );

  $form['mtt_settings']['post_tab']['post'] = array(
    '#type' => 'details',
    '#title' => t('Article features'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['post_tab']['post']['premium-description'] = array(
  '#type' => 'item',
   '#markup' =>
   '<div class="theme-settings-title">'.t("Available in the Premium version of this theme").'</div>
   <div class="theme-settings-image-wrapper">
   <a href="http://morethanthemes.com/themes/restaurantplus" target="_blank">
   <img src="' . base_path() . \Drupal::service('extension.path.resolver')->getPath('theme', 'restaurant_lite') . '/images/premium-03-article.jpg" />
   </a></div> ',
  );

  $form['mtt_settings']['dish_tab']['dish'] = array(
    '#type' => 'details',
    '#title' => t('Dish features'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['dish_tab']['dish']['premium-description'] = array(
  '#type' => 'item',
   '#markup' =>
   '<div class="theme-settings-title">'.t("Available in the Premium version of this theme").'</div>
   <div class="theme-settings-image-wrapper">
   <a href="http://morethanthemes.com/themes/restaurantplus" target="_blank">
   <img src="' . base_path() . \Drupal::service('extension.path.resolver')->getPath('theme', 'restaurant_lite') . '/images/premium-03-article.jpg" />
   </a></div> ',
  );

  $form['mtt_settings']['layout_tab']['layout_modes'] = array(
    '#type' => 'details',
    '#title' => t('Theme Layout'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['layout_tab']['layout_modes']['premium-description'] = array(
  '#type' => 'item',
   '#markup' =>
   '<div class="theme-settings-title">'.t("Available in the Premium version of this theme").'</div>
   <div class="theme-settings-image-wrapper">
   <a href="http://morethanthemes.com/themes/restaurantplus" target="_blank">
   <img src="' . base_path() . \Drupal::service('extension.path.resolver')->getPath('theme', 'restaurant_lite') . '/images/premium-04-layout.jpg" />
   </a></div> ',
  );

  $form['mtt_settings']['font_tab']['font'] = array(
    '#type' => 'details',
    '#title' => t('Font Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['font_tab']['font']['premium-description'] = array(
  '#type' => 'item',
   '#markup' =>
   '<div class="theme-settings-title">'.t("Available in the Premium version of this theme").'</div>
   <div class="theme-settings-image-wrapper">
   <a href="http://morethanthemes.com/themes/restaurantplus" target="_blank">
   <img src="' . base_path() . \Drupal::service('extension.path.resolver')->getPath('theme', 'restaurant_lite') . '/images/premium-05-fonts.jpg" />
   </a></div> ',
  );
  
  $form['mtt_settings']['slideshows_tab']['slideshow'] = array(
    '#type' => 'details',
    '#title' => t('Slideshow Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

 $form['mtt_settings']['slideshows_tab']['slideshow']['premium-description'] = array(
  '#type' => 'item',
   '#markup' =>
   '<div class="theme-settings-title">'.t("Available in the Premium version of this theme").'</div>
   <div class="theme-settings-image-wrapper">
   <a href="http://morethanthemes.com/themes/restaurantplus" target="_blank">
   <img src="' . base_path() . \Drupal::service('extension.path.resolver')->getPath('theme', 'restaurant_lite') . '/images/premium-06-slideshow.jpg" />
   </a></div> ',
  );

  $form['mtt_settings']['isotope_tab'] = array(
    '#type' => 'details',
    '#title' => t('Isotope Filters'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

 $form['mtt_settings']['isotope_tab']['isotope']['premium-description'] = array(
  '#type' => 'item',
   '#markup' =>
   '<div class="theme-settings-title">'.t("Available in the Premium version of this theme").'</div>
   <div class="theme-settings-image-wrapper">
   <a href="http://morethanthemes.com/themes/restaurantplus" target="_blank">
   <img src="' . base_path() . \Drupal::service('extension.path.resolver')->getPath('theme', 'restaurant_lite') . '/images/premium-07-isotope.jpg" />
   </a></div> ',
  );
  
  $form['mtt_settings']['google_maps_tab'] = array(
    '#type' => 'details',
    '#title' => t('Google Maps Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['google_maps_tab']['google_maps_key'] = array(
   '#type' => 'item',
   '#markup' =>
   '<div class="theme-settings-title">'.t("Available in the Premium version of this theme").'</div>
   <div class="theme-settings-image-wrapper">
   <a href="http://morethanthemes.com/themes/restaurantplus" target="_blank">
   <img src="' . base_path() . \Drupal::service('extension.path.resolver')->getPath('theme', 'restaurant_lite') . '/images/premium-09-googlemaps.jpg" />
   </a></div> ',
  );

}
