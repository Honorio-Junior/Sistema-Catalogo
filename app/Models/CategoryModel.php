<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table            = 'category';
    protected $primaryKey       = 'rowid';
    protected $returnType       = 'array';

    public function getAll()
    {
        $query =  $this->db->query('SELECT rowid, * FROM category;');
        return $query->getResultArray();
    }
}
