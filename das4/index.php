<?php
/*    abstract class A {
        protected $x = 5;
        public function f() {
            echo 1;
        }
        abstract public function f1();
    }

    class B extends A {
        public function f1() {

        }
    }*/


/*interface A {
    public function f1();
    public function f2();
    public function f3($x);
}

class B implements A {
    public function f1() {
        echo 1;
    }
    public function f2() {
        echo 2;
    }
    public function f3($x) {
        echo $x;
    }
}

$ob = new B();
$ob->f3("Hello");
*/


//PHP Database Object - PDO

class Database {
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "tm_04_10";
    private $pdo;
    public function __construct() {
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->pdo = new PDO(
                "mysql:host=$this->host;dbname=$this->dbname",
                $this->user,
                $this->pass,
                $options
            );
        } catch(PDOException $error) {
            echo $error->getMessage();
        }
    }
    public function getCategories() {
        $SQL_FOR_CATEGORIES = "SELECT * FROM `categories`";
        $SQL = $this->pdo -> prepare($SQL_FOR_CATEGORIES);
        $SQL -> execute();
        $result = $SQL->fetchAll();
        echo "<pre>";
            print_r($result);
        echo "</pre>";
    }

    public function addCategory($name) {
        $SQL_FOR_INSERT_CATEGORY = "INSERT INTO `categories` VALUES (null, ?)";
        $SQL = $this->pdo->prepare($SQL_FOR_INSERT_CATEGORY);
        $result = $SQL->execute([$name]);
        $last_id = $this->pdo->lastInsertId();
        if($result) {
            echo "Row $last_id successfully created!";
        } else {
            echo "Failed!";
        }
    }

    public function deleteCategory($id) {
        $SQL_FOR_INSERT_CATEGORY = "DELETE FROM `categories` WHERE `id` = ?";
        $SQL = $this->pdo->prepare($SQL_FOR_INSERT_CATEGORY);
        $result = $SQL->execute([$id]);
        if($result) {
            echo "Row successfully deleted!";
        } else {
            echo "Failed!";
        }
    }
}

$ob = new Database();

//$ob->getCategories();
$ob->addCategory("Monitor");
//$ob->deleteCategory(10);


//SELECT * FROM `users` WHERE `email` = 'a@mail.ru' AND `password` = '1234' OR 1 = 1;