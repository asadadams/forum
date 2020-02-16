<?php

class Error401 extends Controller {

    public function index() {
        $this->view( '401', [], '../app/Core/Exceptions/Views/' );
    }
}

?>