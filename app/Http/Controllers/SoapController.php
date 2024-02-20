<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisaninweb\Soap\Soap;

class SoapController extends Controller
{
    /**
     * @soap
     */
    public function index()
    {
        return 1 + 2;
    }

     /**
     * @soap
     */
    public function getProductInfo($productId)
    {
        // Your logic to retrieve product information based on $productId
        $product = [
            'id' => $productId,
            'name' => 'Sample Product',
            'price' => 19.99,
        ];

        return $product;
    }

    /**
     * @soap
     */
    public function addProduct($name, $price)
    {
        // Your logic to add a new product to the system
        // For simplicity, we'll just return a success message
        return "Product added successfully";
    }
}
