<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://mauriciorivera.co
 * @since      1.0.0
 *
 * @package    Hnl_Tab_Form
 * @subpackage Hnl_Tab_Form/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Hnl_Tab_Form
 * @subpackage Hnl_Tab_Form/public
 * @author     Mauricio Rivera <me@mauriciorivera.co>
 */
class Hnl_Tab_Form_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
    $this->version = $version;
    $this->hnl_tab_options = get_option($this->plugin_name);

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hnl_Tab_Form_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hnl_Tab_Form_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/hnl-tab-form-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hnl_Tab_Form_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hnl_Tab_Form_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/hnl-tab-form-public.js', array( 'jquery' ), $this->version, false );

  }
  
  public function contact_tab() {

    $title = $this->hnl_tab_options['tab_title'];
    $portal_id = $this->hnl_tab_options['portal_id'];
    $form_id = $this->hnl_tab_options['form_id'];
    $tab_color = $this->hnl_tab_options['tab_color'];

  ?>
  <div id="contactTab" style="background: <?php echo $tab_color ?>">
  <div><?php echo $title; ?></div>
  </div>
  <div id="contactTabSlider">
    <div id="contactContainer">
      <h3>Get Started!</h3>
      <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
      <script>hbspt.forms.create({
          portalId: "<?php echo $portal_id; ?>",
          formId: "<?php echo $form_id; ?>",
      onFormSubmit: function($form){
      document.cookie = 'hsf=true; path=/';
      }
        });</script><span id="closeTab">X</span>
    </div>
  </div>
  <?php
  }

}
