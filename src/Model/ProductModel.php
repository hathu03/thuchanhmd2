<?php

namespace App\Models;
class ProductModel extends BaseModel
{
    protected $table = 'products';

    public function __construct()
    {
        parent::__construct($this->table);
    }

    public function create($data)
    {
        $sql = "INSERT INTO products (name,category,price,quantity,description) VALUES (?,?,?,?,?)";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['category']);
        $stmt->bindParam(3, $data['price']);
        $stmt->bindParam(4, $data['quantity']);
        $stmt->bindParam(5, $data['description']);
        $stmt->execute();
    }

    public function update($id, $data)
    {
        $sql = "UPDATE products SET name=?,category=?,price=?,quantity=?,description=? WHERE id = $id";
        $stmt = $this->connect->prepare($sql);
        $stmt->bindParam(1, $data['name']);
        $stmt->bindParam(2, $data['category']);
        $stmt->bindParam(3, $data['price']);
        $stmt->bindParam(4, $data['quantity']);
        $stmt->bindParam(5, $data['description']);
        $stmt->execute();
    }
}