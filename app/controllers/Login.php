<?php

class Login {
    use Controller;
    public function index() {
        $data = [];
        if($_SERVER['REQUEST_METHOD']=="POST") {
            $user = new User;
            $arr['Name'] = $_POST['Name'];
            $row = $user->first($arr);
            if($row) {
                if($row->Password == $_POST['Password']) {
                    $_SESSION['USER'] = $row;
                    redirect('home');
                }
            }
            
            $user->errors['Email'] = "Wrong Name or password";
            $data['errors'] = $user->errors;
    }
        $this->view('login',$data);
    }

}

