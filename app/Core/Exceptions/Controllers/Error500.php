<?php

class Error500 extends Controller {

    public function index() {
        $this->view( '500', [], '../app/Core/Exceptions/Views/' );
    }
}

?>