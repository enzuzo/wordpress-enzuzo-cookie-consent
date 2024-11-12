<div class="clearfix">
    <div class="enzuzo-cookie-consent-right-col">
        <h3><p><?php enzuzo_cookie_consent_enabled() ? _e('The banner is enabled') : _e('The banner is disabled'); ?></p></h3>
        <h3><p><?php enzuzo_cookie_consent_get_uuid() ? _e('The banner has a valid UUID') : _e('The banner does not have a valid UUID'); ?></p></h3>
        <p><?php _e('Note that there may be differences in the final output due to configuration, CSS, etc.'); ?></p>
	</div>
</div>
