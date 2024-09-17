<?php

class Signup {
    use Controller;
    public function index() {
        $data = [];
        if($_SERVER['REQUEST_METHOD']=="POST") {
            $user = new User;
            if($user->validate($_POST)) {
                unset($_POST['terms']);
                $user->insert($_POST);
                redirect('login');
            }

            $data['errors'] = $user->errors;
    }
        $this->view('signup',$data);
    }

}

