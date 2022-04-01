<?php

class Userscontr extends Users {
    public function createUser($firstname,$lastname,$dob){
        $this->setUser($firstname,$lastname,$dob);
    }
}