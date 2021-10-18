<?php
    class simpleobject{
        public $user = "David";
        public $id = 10001;

        public function displayuserinfo(){
            echo "The id of ";
            echo $this->user;
            echo "is ";
            echo $this->id;
            echo ".";
            echo "<br>";

            return $this->id;
        }
    }

    $fun = new simpleobject();
    $funvalue = $fun->displayuserinfo();
    echo "Hello world!";
    echo "<br>";
    echo $funvalue;

    echo $_SERVER["HTTP_HOST"];
    echo "<br>";
    echo $_SERVER["REQUEST_URI"];

    $uri = 'http://';
    $uri .= $_SERVER["HTTP_HOST"];
    header('Location: '.$uri.'/test');
    exit;
?>
