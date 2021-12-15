<?php

if ( !function_exists('md_user_icon_folder_keyhole') ) {
    
    /**
     * The function md_user_icon_folder_keyhole gets the folder_keyhole's icon
     * 
     * @param array $params contains the parameters
     * 
     * @since 0.0.8.5
     * 
     * @return string with icon
     */
    function md_user_icon_folder_keyhole($params) {

        // Set additional class
        $class = !empty($params['class'])?' ' . $params['class']:'';

        // Return icon
        return '<i class="ri-folder-keyhole-line' . $class . '"></i>';

    }
    
}

/* End of file folder_keyhole.php */