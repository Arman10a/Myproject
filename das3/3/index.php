<?php
//get & set magic methods
/*    class Users {
        private $user;
        private $age;
        public function __set($key, $value) {
            $this -> $key = $value;
        }
        public function __get($key) {
            return $this->$key;
        }
    }
    $us = new Users();
    $us->user = "John";
    $us->age = 30;

    echo $us->user;*/

//Abstract class
/*abstract class Users {
    public function print_hello() {
        echo "Hello";
    }
    abstract public function print_welcome();
}
class Admins extends Users {
    public function print_welcome(){
        echo "Welcome";
    }
}
$adm = new Admins();
$adm->print_hello();*/


//Interface
//class Article {
//    protected $title ="Title 1";
//}
//
//interface Template {
//    public function createElement($content);
//    public function createMessage($message);
//    public function createStore($name, $publish_date);
//}
//
//class Html extends Article implements Template  {
//    public function createElement($content) {
//        return "<div><h2>" . $this->title . " </h2><p>$content</p></div>";
//    }
//    public function createMessage($message) {
//
//    }
//    public function createStore($name, $publish_date) {
//
//    }
//}
//
//$html = new Html();
//echo $html->createElement("Hello");




//Traits

trait MyTrait {
    public function f1() {
        echo "a";
    }

    public function f2() {
        echo "b";
    }

    public function f3() {
        echo "c";
    }
}

trait MyTrait1 {
    public function f4() {
        echo "f4";
    }
}
class A {
    use MyTrait;
}

class B {
    use MyTrait, MyTrait1;
}

class C {
    use MyTrait;
}

class D {
    use MyTrait;
}