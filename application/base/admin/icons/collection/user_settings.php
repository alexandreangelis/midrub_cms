<?php

if ( !function_exists('md_admin_icon_user_settings') ) {
    
    /**
     * The function md_admin_icon_user_settings gets the user_settings's icon
     * 
     * @param array $params contains the parameters
     * 
     * @since 0.0.8.5
     * 
     * @return string with icon
     */
    function md_admin_icon_user_settings($params) {

        // Set additional class
        $class = !empty($params['class'])?' ' . $params['class']:'';

        // Return icon
        return '<i class="iconify' . $class . '" data-icon="fluent:person-settings-20-regular"></i>';

    }
    
}

/* End of file user_settings.php */