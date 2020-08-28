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
  <form method="post" action="<?php echo esc_html( admin_url( 'admin-post.php' ) ); ?>">
    <strong>HubSpot Form ID</strong><br>
    <input type="text" name="hnl-hubspot-id" value="" class="regular-text" />
    <br><br>
    <strong>Form tab title</strong><br>
    <input type="text" name="hnl-tab-title" value="" class="regular-text" />
    <br><br>
    <strong>Form tab color</strong><br>
    <input type="text" name="hnl-tab-color" value="" class="regular-text" /><br>
    <span class="description">Please use HEX colors (ie. #000000)</span><br>
    <?php
      wp_nonce_field( 'hnl-options-save', 'hnl-custom-mesage' );
      submit_button();
    ?>
  </form>
</div>
