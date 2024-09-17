<?php

class Home {
    use Controller;
    public function index() {
        $data['Username'] = empty($_SESSION['USER'])  ? 'User' : $_SESSION['USER']->Name;
        $this->view('home',$data);
    }

}

