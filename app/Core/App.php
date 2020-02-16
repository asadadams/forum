<?php

/*
|--------------------------------------------------------------------------
| Core Blocks App
|--------------------------------------------------------------------------
|
| Blocks Framework
| https://github.com/asadadams/BlocksMVC
| Softvision Co
|
| This file is the core of Blocks MVC
|
*/

class App {

    private $controller = 'Home';
    private $method = 'index';
    private $params = [];
    private $controller_base = '../app/Controllers/';

    /**
    * App's constructor, parse url 
     *
     * @return void
     */
    public function __construct() {
        session_start();
        $url = $this->parseUrl();
        
        if($url[0]!=NULL){
            if($url[0] == 'Error404' || $url[0] == 'Error401' || $url[0] == 'Error500'){
                $this->controller = ucwords( $url[0] );
                $this->controller_base = '../app/Core/Exceptions/Controllers/';
                unset( $url[0] );
            }else{
                if (file_exists( '../app/Controllers/'.ucwords( $url[0] ).'.php' ) ) {
                    $this->controller = ucwords( $url[0] );
                    unset( $url[0] );
                }else{
                    $this->controller = "Error404";
                    $this->controller_base = '../app/Core/Exceptions/Controllers/';
                }
            }
        }


        require_once( $this->controller_base.$this->controller.'.php' );
        $this->controller = new $this->controller;

        if ( isset( $url[1] ) ) {
            if ( method_exists( $this->controller, $url[1] ) ) {
                $this->method = $url[1];
                unset( $url[1] );
            }
        }

        $this->params = $url ? array_values( $url ) : [] ;
        call_user_func_array( [$this->controller, $this->method], $this->params );
    }

    /**
     * Parse's URL
    *
    * @return void
    */

    private function parseUrl() {
        if ( isset( $_GET['url'] ) ) {
            return explode( '/', rtrim( $_GET['url'], '/' ) );
        }
    }
}

?>