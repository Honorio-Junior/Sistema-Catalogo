<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;

class Home extends BaseController
{
    public function index(): string
    {
        $cats = new CategoryModel();
        $prods = new ProductModel();

        return view('products', [
            'categorys' => $cats->getAll(), 
            'products' => $prods->getAll()
            ]
        );
    }

    public function searchByProductName()
    {
        $name_product = $_GET['name_product'] ?? ''; 

        $cats = new CategoryModel();
        $prods = new ProductModel();

        return view('products',
        [
            'categorys' => $cats->getAll(),
            'products' => $prods->getByName($name_product)
        ]
        );
    }

    public function searchByCategoryId($id)
    {

        $cats = new CategoryModel();
        $prods = new ProductModel();
        return view('products',
        [
            'categorys' => $cats->getAll(),
            'products' => $prods->getByCategoryId($id)
        ]
        );
    }

}
