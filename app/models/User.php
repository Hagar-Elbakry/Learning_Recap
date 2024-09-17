<?php

class User {
    use Model;

    protected $table = "users";
    protected $allowedColumns = [
        'Name',
        'Email',
        'Password'
    ];

    public function validate($data) {
        $this->errors = [];

        if(empty($data['Name'])) {
            $this->errors['Name'] = "Name is required";
        }

        if(empty($data['Email'])) {
            $this->errors['Email'] = "Email is required";
        } else if(!filter_var($data['Email'],FILTER_VALIDATE_EMAIL)) {
            $this->errors['Email'] = "Email is not valid";
        }

        if(empty($data['Password'])) {
            $this->errors['Password'] = "Password is required";
        }

        if(empty($data['terms'])) {
            $this->errors['terms'] = "Please accept terms and conditions"; 
        }

        if(empty($this->errors)) {
            return true;
        }

        return false;
    }
}