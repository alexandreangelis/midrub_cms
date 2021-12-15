<?php

if ( !function_exists('md_user_icon_home') ) {
    
    /**
     * The function md_user_icon_home gets the home's icon
     * 
     * @param array $params contains the parameters
     * 
     * @since 0.0.8.5
     * 
     * @return string with icon
     */
    function md_user_icon_home($params) {

        // Set additional class
        $class = !empty($params['class'])?' ' . $params['class']:'';

        // Return icon
        return '<i class="ri-home-8-line' . $class . '"></i>';

    }
    
}

/* End of file home.php */