<?php

if ( !function_exists('md_user_icon_add_road') ) {
    
    /**
     * The function md_user_icon_add_road gets the add_road's icon
     * 
     * @param array $params contains the parameters
     * 
     * @since 0.0.8.5
     * 
     * @return string with icon
     */
    function md_user_icon_add_road($params) {

        // Set additional class
        $class = !empty($params['class'])?' ' . $params['class']:'';

        // Return icon
        return '<i class="material-icons-outlined' . $class . '">'
            . 'add_road'
        . '</i>';

    }
    
}

/* End of file add_road.php */