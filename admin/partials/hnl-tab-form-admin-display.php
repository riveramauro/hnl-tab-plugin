<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://mauriciorivera.co
 * @since      1.0.0
 *
 * @package    Hnl_Tab_Form
 * @subpackage Hnl_Tab_Form/admin/partials
 * 
 */

 $testing = Hnl_Tab_Form_Admin::display_an_option('template');
 echo $testing;
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">
  <h1 class="wp-heading-inline"><?php echo esc_html( get_admin_page_title() ); ?></h1>
  <hr>
  <h2>Contact Tab Fields</h2>
  <br>
  <form method="post" name="hnl_form_options" action="options.php">
    <?php
    
      $options = get_option($this->plugin_name);

      $hubspot_id = $options['hubspot_id'];
      $tab_title = $options['tab_title'];
      $tab_color = $options['tab_color'];

      print_r($options);
    
    ?>

    <?php
      settings_fields($this->plugin_name);
      do_settings_sections($this->plugin_name);
    ?>
    <strong>HubSpot Form ID</strong><br>
    <input type="text" name="<?php echo $this->plugin_name;?>[hubspot_id]" value="<?php echo $hubspot_id; ?>" class="regular-text" />
    <br><br>
    <strong>Form tab title</strong><br>
    <input type="text" name="<?php echo $this->plugin_name;?>[tab_title]" value="<?php echo $tab_title; ?>" class="regular-text" />
    <br><br>
    <strong>Form tab color</strong><br>
    <input type="text" name="<?php echo $this->plugin_name;?>[tab_color]" value="<?php echo $tab_color; ?>" class="regular-text" /><br>
    <span class="description">Please use HEX colors (ie. #000000)</span><br>
    <?php submit_button(__('Save all changes', $this->plugin_name), 'primary','submit', TRUE); ?>
  </form>
</div>
