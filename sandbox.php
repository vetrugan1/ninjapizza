<?php

    class User {

        private $email;
        private $name;

        public function __construct($name, $email){
//            $this->email = 'an@tal.com';
//            $this->name = 'an';
            $this->email = $email;
            $this->name = $name;
        }

        public function login(){

            echo $this->name .  ' logged in';

        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            if(is_string($name) && strlen($name) > 4){
                $this->name = $name;
                return "name has been updated to $name";
            }else{
                return 'not a valid name';
            }
        }

        public function getEmail(){
            return $this->email;
        }

        public function setEmail($email = 'your@email.com'){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                return $this->email = $email;
                echo "email update to $email";
            }else{
                echo 'Email must be a valid email address';
            }
        }

    }

    $userTwo = new User('yoshi', 'yoshi@an.com');

//    echo $userTwo->getName();
    echo $userTwo->setName('mario');
    echo '<br/>';
    echo $userTwo->getName();
//    echo $userTwo->setEmail();
//    echo '<br/>';
    echo $userTwo->getEmail();

?>
