<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use App\products;
use Illuminate\Support\Facades\Crypt;

class AdminDataController extends Controller
{
    function saveCategory(Request $request){        
        $categories_object = new categories();
        $categories_object->category_name = $request->category_name;
        $categories_object->category_type = "";
        $categories_object->deleted = "0";
        $categories_object->save();   
    }
    function saveProduct(Request $request){
        $product_object = new products();
        $product_object->product_name = $request->product_name;
        $product_object->product_category = $request->product_category;
        $product_object->product_type = $request->product_type;
        $product_object->product_design = $request->product_design;
        $product_object->product_material = $request->product_material;
        $product_object->product_cost = $request->product_cost;
        $product_object->deleted = "0";
        $product_object->save();
        $insertedId = encrypt($product_object->id);
        return json_encode($insertedId);    
    }
    function saveProductDetails(Request $request){
        return $request->sizes;
    }
}
