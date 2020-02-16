<?php

/*
|--------------------------------------------------------------------------
| Main Controller
|--------------------------------------------------------------------------
|
| This is the main controller for the Blocks MVC.
| All Controllers must inherit from this Main Controller Class.
|
*/

class Controller {
    /**
     * To load a model and return an instance of that model if it exists
     *
     * @param  String $model name of model
     * @param  String $path path to look for view
     * @return void
     */
    public function model( $model ,$path = '../app/Models/') {
        //Checking if model exists and requiring it
        $model = ucwords($model);
        if ( file_exists( $path. $model.'.php' ) ) {
            require_once( $path. $model.'.php' );
       
            //Returning an instance of the model;
            $model = 'Models\\'.$model;
            return new $model;
        }
    }

    /**
     * To load a view
     *
     * @param  String $view view's name
     * @param  Array $data  data passed to view
     * @param  String $path path to look for view
     *
     * @return void
     */
    public function view( $view, $data = [], $path = "../app/Views/") {
        if($view == '404' || $view == '401' || $view == '500'){
            $path = "../app/Core/Exceptions/Views/";
        }

        //Checking if view exists and requiring it
        if ( file_exists( $path.$view.'.php' ) ) {
            require_once( $path.$view.'.php' );
        }else{
            var_dump($path.$view.'.php');
        }
    }
}

?>