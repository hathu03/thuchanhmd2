<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers;

$productController = new Controllers\ProductController();
$page = $_GET['page'] ?? "";
switch ($page) {
    case 'product-create':
        $productController->create();
        break;
    case 'product-delete':
        $id = $_GET['id'];
        $productController->delete($id);
        break;
    case "product-update":
        $id = $_GET['id'];
        $productController->update($id);
        break;
    default:
        if (isset($_GET['search'])) {
            $productController->search($_GET['search']);
        } else {
            $productController->index();
        }
}