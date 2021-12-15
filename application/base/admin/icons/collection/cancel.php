<?php

if ( !function_exists('md_admin_icon_cancel') ) {
    
    /**
     * The function md_admin_icon_cancel gets the cancel's icon
     * 
     * @param array $params contains the parameters
     * 
     * @since 0.0.8.5
     * 
     * @return string with icon
     */
    function md_admin_icon_cancel($params) {

        // Set additional class
        $class = !empty($params['class'])?' ' . $params['class']:'';

        // Return icon
        return '<i class="iconify' . $class . '" data-icon="fluent:dismiss-circle-24-regular"></i>';

    }
    
}

/* End of file cancel.php */