<?php

    //own custom datatype;
    //class
    //class name start with capital letter

    class User {
        private $email;
        private $name;

        public function __construct($name, $email){
            // $this -> email = 'mahirshahriar10@gmail.com';
            // $this -> name  = 'Mahir';
            
            $this -> email = $email;
            $this -> name  = $name;
        }

        public function login(){
            //echo 'the user logged in ';
            echo $this -> name. ' logged in';
        }

        public function getName(){
            return $this -> name;
        }

        public function setName($name){
            if (is_string($name) && strlen($name) > 1) {
                $this -> name = $name;
                return "Name has been updated to $name";
            }else{
                return 'Not a valid name';
            }
        }

    }

    // $userOne = new User();

    // $userOne -> login();
    // echo $userOne -> name;

    $userTwo = new User('tarin', 'tarin@Gmil.com');

    //to get a private propertu
    //echo $userTwo -> getName();
    //echo $userTwo -> setName(50);
    //echo $userTwo -> setName('Mahir');
    echo $userTwo -> getName();

    // echo $userTwo -> name;
    // echo $userTwo -> email;
    //$userTwo -> login();

    // $userTwo -> name = 'Mahir';
    // echo $userTwo -> name;



?>