<?php

ini_set('display_errors', 1);

class User {
    public $name;
    public $surname;
    public $username;
    public $email;
    private $password;
    public $subscription_date;

    // METODI
    function __construct($_name, $_surname) {
        $this->name = $_name;
        $this->surname = $_surname;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }

}