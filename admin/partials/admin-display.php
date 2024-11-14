<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://www.enzuzo.com
 * @since      1.0.0
 *
 * @package    Enzuzo_Cookie_Consent
 * @subpackage Enzuzo_Cookie_Consent/admin/partials
 */
?>

<div class="wrap">
    <h2><?php _e('Enzuzo Cookie Consent', 'enzuzo-cookie-consent'); ?></h2>
    <p><a href="<?php echo admin_url() ?>/options-general.php?page=enzuzo-cookie-consent&tab=help" class"margin"><?php _e('How to use Enzuzo Cookie Consent', 'enzuzo-cookie-consent'); ?></a></p>
	<h2 class="nav-tab-wrapper">
		<?php
	    $tabs = array(
		    'setup' => __('Setup', 'enzuzo-cookie-consent'),
		    'preview' => __('Preview', 'enzuzo-cookie-consent'),
		    'help' => __('Help', 'enzuzo-cookie-consent'),
		    'about' => __('About', 'enzuzo-cookie-consent')
	    );
	    //set current tab
	    $tab = ( isset($_GET['tab']) ? $_GET['tab'] : 'setup' );
	    ?>
	    <?php foreach( $tabs as $key => $value ): ?>
	    	<a class="nav-tab <?php if( $tab == $key ){ echo 'nav-tab-active'; } ?>" href="<?php echo admin_url() ?>options-general.php?page=enzuzo-cookie-consent&tab=<?php echo $key; ?>"><?php echo $value; ?></a>
	    <?php endforeach; ?>
	</h2>

	<div class="enzuzo-cookie-consent-tabs">
		<?php if( $tab == 'setup' ): ?>

            <?php flush_rewrite_rules(); ?>
		    <form method="post" action="options.php">
				<?php settings_fields('enzuzo-cookie-consent'); ?>
				<?php do_settings_sections('enzuzo-cookie-consent'); ?>
				<?php submit_button('Save Changes'); ?>
		    </form>

		<?php elseif( $tab == 'preview' ): ?>

            <?php $this->admin_enqueue_scripts(); ?>
			<?php include plugin_dir_path( dirname( __FILE__ ) ) . 'partials/preview/preview.php'; ?>

		<?php elseif( $tab == 'help' ): ?>

			<?php include plugin_dir_path( dirname( __FILE__ ) ) . 'partials/help/help.php'; ?>

		<?php else: ?>

			<?php include plugin_dir_path( dirname( __FILE__ ) ) . 'partials/about/about.php'; ?>

	   <?php endif; ?>
	</div>
</div>
