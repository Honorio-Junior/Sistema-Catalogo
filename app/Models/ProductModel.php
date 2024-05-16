<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table            = 'product';
    protected $primaryKey       = 'rowid';
    protected $returnType       = 'array';

    public function getAll()
    {
        $query =  $this->db->query('
        SELECT category.name AS cate_name, product.rowid, product.* 
        FROM product 
        JOIN category ON 
        product.cate_id = category.rowid;
        ');

        return $query->getResultArray();
    }

    public function getByName($name)
    {
        $query =  $this->db->query('
        SELECT category.name AS cate_name, product.rowid, product.* 
        FROM product
        JOIN category ON 
        product.cate_id = category.rowid
        WHERE product.name LIKE ?;
        ', "%$name%");

        return $query->getResultArray();
    }

    public function getByCategoryId($id)
    {
        $query =  $this->db->query('
        SELECT category.name AS cate_name, product.rowid, product.* 
        FROM product
        JOIN category ON 
        product.cate_id = category.rowid
        WHERE category.rowid LIKE ?;
        ', "%$id%");

        return $query->getResultArray();
    }
}
