<?php
//    class Users {
//        public $first_name;
//        public $last_name;
//        public function __construct($fname, $lname) {
//            $this->first_name = $fname;
//            $this->last_name = $lname;
//        }
//        public function getValues() {
//            return $this->first_name . " " . $this->last_name;
//        }
//    }
//    $us = new Users("John", "Smith");
//    $us1 = new Users("Tom", "Smith");
//    echo $us->getValues();


//class A {
//    public function __construct() {
//        echo "Hello I am construct <br>";
//    }
//    public function hello() {
//        echo "Hello <br>";
//    }
//    public function __destruct() {
//        echo "Finished <br>";
//    }
//    public function welcome() {
//        echo "Welcome <br>";
//    }
//    public function sum($a, $b) {
//        echo $a + $b . "<br>";
//    }
//}
//
//$a = new A();
//$a->hello();
//$a->sum(4,4);
//$a->welcome();


//class Animal
//{
//    public $name;
//    private $age = 25;
//    protected $color = "black";
//
//    public function __construct($name)
//    {
//        $this->name = $name;
//    }
//
//    public function get_name()
//    {
//        return $this->name . " " . $this->color;
//    }
//}
//class Dogs extends Animal {}
//class Cats extends Animal {}
//
//$dog1 = new Dogs("Mike");
//echo $dog1->get_name();


//class Users {
//    public $first_name;
//    public function __construct($fname) {
//        $this->first_name = $fname;
//    }
//    public function get_name() {
//        return $this->first_name;
//    }
//}
//
//class Admins extends Users {
//    public $age;
//    public function __construct($fname, $age) {
//        parent::__construct($fname);
//        $this->age = $age;
//    }
//    public function get_full_user() {
//        return $this->first_name . " " . $this->age;
//    }
//}

//$admin1 = new Admins("John", 30);
//echo $admin1->get_full_user();


/*class A {
    public $user = "John Smith";
    public static $age = 30;
    public static function get_age() {
        return self::$age;
    }
    public function getUser() {
        return $this->user;
    }
}

echo A::get_age();*/