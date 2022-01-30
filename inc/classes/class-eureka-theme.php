<?php
/**
 * Bootstraps the Theme.
 * 
 * @package Eureka
 */

namespace EUREKA_THEME\Inc;
use EUREKA_THEME\Inc\Traits\Singleton;

class EUREKA_THEME {
    use Singleton; 

    protected function __construct() {

        wp_die('hello');
       
        // load class.
        $this->set_hooks(); 
    }
  
    protected function set_hooks() {
        // actions and filters
    }
}