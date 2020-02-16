<?php

/*
|--------------------------------------------------------------------------
| URL Helper class
|--------------------------------------------------------------------------
|
| This class contains all helpers related to URLs
|
*/

class Url {

    private function parseUrl() {
        if ( isset( $_GET['url'] ) ) {
            return explode( '/', rtrim( $_GET['url'], '/' ) );
        }
    }

    /**
    * redirecting to a page
    *
    * @param  mixed $page
    *
    * @return void
    */
    public static function redirect( $page ) {
        header( 'location: http://'.URLROOT.'/'. $page );
        exit;
    }

    /**
    * Return a secure HTTPS url
    *
    * @param  String $path
    *
    * @return String
    */
    public static function secure_public( $path = '' ) {
        if ( !empty( $path ) ) return 'https://'. URLROOT .'/'.$path;
        else return 'https://'. URLROOT;
    }

    /**
    * Returns public url
    *
    * @param  String $path
    *
    * @return String
    */
    public static function public( $path = '' ) {
        if ( !empty( $path ) ) return 'http://'. URLROOT .'/'.$path;
        else return 'http://'. URLROOT;
    }
}
?>