<?php
//OOP->Object Oriented Programming
//1.Class
//2.Object

//kodi kompaktutyun
//kodi krknutyan bacarum
//anvtang kod
//tvyalneri hasaneliutyan sahmanapakum
//
//class Car {
////    popoxakan=property
////      function=method
//    public $model = "Mercedes";
//    public $price = 2500;
//}
//
//$car1 = new Car();
//echo $car1->model;
//echo $car1->price;
//$car2 = new Car();
//echo $car2->model;
//$car2->model = "BMW";
//echo $car1->model;//Mercedes
//echo $car2->model;//BMW



//class Car {
//    public $model = "";
//    public function setModel($mod) {
//        $this->model = $mod;
//    }
//    public function getModel() {
//        return $this->model;
//    }
//}
//$car1 = new Car();
//$car1->setModel("Mercedes");
//echo $car1->getModel();
//$car2 = new Car();
//$car2->setModel("BMW");
//echo $car2->getModel();


//class Car {
//    public $model = "Mercedes";
//    protected $price = 2500;
//    private $color = "Silver";
//    public function getColor() {
//        return $this->color;
//    }
////    protected - pashtpanvac
////      private - pak
//}
//
//$car1 = new Car();
//echo $car1->model;
////echo $car1->price;
//echo $car1->getColor();


//class User {
//    const USERNAME = "John Smith";
//    public function getUsername() {
//        return self::USERNAME;
//    }
//}
////echo User::USERNAME;
//$obj = new User();
//echo $obj->getUsername();

//class Database {
//    private $host = "localhost";
//    private $user = "root";
//    private $password = "";
//    private $db_name = "tm_04_10";
//    private function connect() {
//        return mysqli_connect(
//            $this->host,
//            $this->user,
//            $this->password,
//            $this->db_name
//        );
//    }
//    public function getCategories() {
//        $db = $this->connect();
//        $result = mysqli_query($db, "SELECT * FROM `categories`");
//        return json_encode(mysqli_fetch_all($result, MYSQLI_ASSOC));
//    }
//
//    public function addCategory($name) {
//        $db = $this->connect();
//        $result = mysqli_query($db, "INSERT INTO `categories` VALUES (null, '$name')");
//        return ($result) ? 'Inserted' : 'Failed';
//    }
//
//    public function updateCategory($name, $id) {
//        $db = $this->connect();
//        $result = mysqli_query(
//            $db,
//            "UPDATE `categories` SET `category_name` = '$name' WHERE `id` = $id"
//        );
//        return ($result) ? 'Updated' : 'Failed';
//    }
//
//    public function deleteCategory($id) {
//        $db = $this->connect();
//        $result = mysqli_query(
//            $db,
//            "DELETE FROM `categories`  WHERE `id` = $id"
//        );
//        return ($result) ? 'Deleted' : 'Failed';
//    }
//}
//
//$db = new Database();
//echo $db->getCategories();
//echo $db->addCategory("PC");
//echo $db->updateCategory("PC1", 6);
//echo $db->deleteCategory(6);



class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db_name = "tm_04_10";
    private function connect() {
        return new mysqli(
            $this->host,
            $this->user,
            $this->password,
            $this->db_name
        );
    }
    public function getCategories() {
        $db = $this->connect();
        $result = $db->query("SELECT * FROM `categories`");
        $response = [
            'countData' => $result->num_rows,
            'data' => $result->fetch_all(MYSQLI_ASSOC)
        ];
        return json_encode($response);
    }

    public function addCategory($name) {
        $db = $this->connect();
        $result = $db->query("INSERT INTO `categories` VALUES (null, '$name')");
        return ($result) ? 'Inserted' : 'Failed';
    }

    public function updateCategory($name, $id) {
        $db = $this->connect();
        $result = $db->query(
            "UPDATE `categories` SET `category_name` = '$name' WHERE `id` = $id"
        );
        return ($result) ? 'Updated' : 'Failed';
    }

    public function deleteCategory($id) {
        $db = $this->connect();
        $result = $db->query(
            "DELETE FROM `categories`  WHERE `id` = $id"
        );
        return ($result) ? 'Deleted' : 'Failed';
    }
}

$db = new Database();

echo $db->getCategories();
//echo $db->addCategory("PC");
//echo $db->updateCategory("PC1", 6);
//echo $db->deleteCategory(6);