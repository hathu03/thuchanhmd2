<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new ProductModel();
        parent::__construct($this->model);
    }

    public function index()
    {
        $products = parent::index();
        include "src/Views/layout/page.php";
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/Views/product/create.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "category" => $_POST["category"],
                "price" => $_POST["price"],
                "quantity" => $_POST["quantity"],
                "description" => $_POST["description"],
            ];
            $this->model->create($data);
            header('location:index.php');
        }
    }

    public function delete($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $product = $this->model->getById($id);
            include "src/Views/product/delete.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "sector" => $_POST["category"],
                "price" => $_POST["price"],
                "quantity" => $_POST["quantity"],
                "description" => $_POST["description"],
            ];
            $this->model->delete($id);
            header('location:index.php');
        }
    }

    public function update($id)
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $product = $this->model->getById($id);
            include "src/Views/product/update.php";
        } else {
            $data = [
                "name" => $_POST["name"],
                "sector" => $_POST["category"],
                "price" => $_POST["price"],
                "quantity" => $_POST["quantity"],
                "description" => $_POST["description"],
            ];
            $this->model->update($id, $data);
            header('location:index.php');
        }
    }

    public function search($keyword)
    {
        $products = $this->model->search($keyword);
        include "src/Views/layout/page.php";
    }

}