<?php

if ( !function_exists('md_user_icon_delete') ) {
    
    /**
     * The function md_user_icon_delete gets the delete's icon
     * 
     * @param array $params contains the parameters
     * 
     * @since 0.0.8.5
     * 
     * @return string with icon
     */
    function md_user_icon_delete($params) {

        // Set additional class
        $class = !empty($params['class'])?' ' . $params['class']:'';

        // Return icon
        return '<i class="ri-delete-bin-6-line' . $class . '"></i>';

    }
    
}

/* End of file delete.php */