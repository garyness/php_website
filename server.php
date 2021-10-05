<?php
    class simpleobject{
        public $user = "David";
        public $id = 10001;

        public function displayuserinfo(){
            echo "The id of " + $this->user + "is " + $this->id + ".";
        }
    }

    // $fun = new simpleobject();
    // $fun->displayuserinfo();
    echo "Hello world!";
    echo $user;
?>