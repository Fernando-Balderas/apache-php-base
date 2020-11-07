<?php 

require_once "Rest.php";
require_once "Curl.php";

class Auth extends REST {

    public function notFound() {
        $msg['message'] = 'Not Found.';
        $this->response($this->json($msg), 404);
    }

    public function authHome() {
        if ($this->getRequestMethod() != "GET"){
            $msg['message'] = 'Error.';
            $this->response($this->json($msg), 406);
        }
        $msg['message'] = 'Auth home.';
        $this->response($this->json($msg), 200);
    }
    
}

?>