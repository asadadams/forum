<?php

/*
|--------------------------------------------------------------------------
| URL Session class
|--------------------------------------------------------------------------
|
| This class contains all helpers related to Sessions
|
*/

class Session {

    /**
    * Check if session is set
    *
    * @param  String $key
    *
    * @return Boolean
    */
    public static function isSet( $key ) {
        if ( isset( $_SESSION[$key] ) && !empty( $_SESSION[$key] ) ) return true;
        return false;
    }

    /**
    * Setting session
    *
    * @param  String $key key for session
    * @param  String $value value to store in session
    *
    * @return void
    */
    public static function set( $key, $value ) {
        $_SESSION[$key] = $value;
    }

    /**
    * Getting value in a sesion
    *
    * @param  String $key session to get
    *
    * @return String returns a session value or null
    */
    public static function get( $key ) {
        if ( self::isSet( $key ) ) return $_SESSION[$key];
        return null;
    }

    /**
    * removing session
    *
    * @param  String $key session's key
    *
    * @return void
    */
    public static function remove( $key ) {
        if ( self::isSet( $key ) ) unset( $_SESSION[$key] );
    }
}
?>