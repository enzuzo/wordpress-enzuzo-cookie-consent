<?php

/**
 * This file is used to setup a settings section
 *
 * @link       https://www.enzuzo.com
 * @since      1.0.0
 *
 * @package    Enzuzo_Cookie_Consent
 * @subpackage Enzuzo_Cookie_Consent/admin/partials
 */
?>
<textarea name="enzuzo_cookie_consent_uuid" rows="4" cols="60" placeholder="<?php _e('Example: ', 'enzuzo-cookie-consent'); ?>
aaaaaaaa-bbbb-cccc-dddd-eeeeeeeeeeee or JavaScript snippet from Enzuzo Admin Dashboard">
<?php
    $option = get_option('enzuzo_cookie_consent_uuid'); 
    $uuid = enzuzo_cookie_consent_get_uuid();

    if ($uuid) {
        echo $uuid;
    } else {
        echo $option;
    }
?>
</textarea>
