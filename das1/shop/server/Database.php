<?php
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
        $name = $db->real_escape_string($name);
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

    public function getProducts() {
        $db = $this->connect();
        $result = $db->query("SELECT products.*, categories.category_name FROM `products` INNER JOIN `categories` ON products.category_id = categories.id");
        $response = [
            'countData' => $result->num_rows,
            'data' => $result->fetch_all(MYSQLI_ASSOC)
        ];
        return json_encode($response);
    }
}

$db = new Database();

//$category_name = trim(htmlspecialchars($_POST['category_name']));
//echo $db->addCategory($category_name);

echo $db->getProducts();

//SELECT products.product_name, categories.category_name FROM `products`
//INNER JOIN `categories` ON products.category_id = categories.id WHERE categories.category_name = 'Notebooks'