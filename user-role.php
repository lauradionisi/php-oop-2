<?php

ini_set('display_errors', 1);

class UserRole extends User {
    public $role;

    public function setRole($_role) {
        $this->role = $_role;
    }
    public function getRole() {
        return $this->role;
    }
}