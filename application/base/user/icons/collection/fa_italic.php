<?php

if ( !function_exists('md_user_icon_fa_italic') ) {
    
    /**
     * The function md_user_icon_fa_italic gets the fa_italic's icon
     * 
     * @param array $params contains the parameters
     * 
     * @since 0.0.8.5
     * 
     * @return string with icon
     */
    function md_user_icon_fa_italic($params) {

        // Set additional class
        $class = !empty($params['class'])?' ' . $params['class']:'';

        // Return icon
        return '<i class="fas fa-italic' . $class . '"></i>';

    }
    
}

/* End of file fa_italic.php */