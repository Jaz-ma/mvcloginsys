<?php

class Usersview extends Users {
    public function showUser($name){
        $results = $this->getUser($name);

        echo "FUll name: ". $results[0]['users_firstname']."". $results[0]['users_lastname']."<br> <br>";
        echo "Date of birth: " .$results[0]['users_dateofbirth'];
    }
}