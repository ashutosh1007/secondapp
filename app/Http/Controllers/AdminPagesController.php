<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function addProduct(){
        $categories = DB::table('categories')->get();
        return view('admin.includes.add_product',['categories'=>$categories]); 
    } 
    
    public function viewOrder(){
        $orders = DB::table('orders')
        ->join('order_quantities', 'orders.order_id', '=', 'order_quantities.order_id')
        ->join('order_addresses', 'order_quantities.order_id', '=', 'order_addresses.order_id')
        ->get();
        
        return view('admin.includes.view_orders', ['orders'=>$orders]);
    }
    
    public function viewProduct(){
        $products = DB::table('products')
        ->join('product_color_quantities', 'products.product_id', '=', 'product_color_quantities.product_id') 
        ->join('product_images', 'product_color_quantities.product_id', '=', 'product_images.product_id')
        ->get();
        return view('admin.includes.view_inventory',['products'=>$products]);
    }
    public function viewCustomers(){
        $customers = DB::table('customers')->get();
        return view('admin.includes.view_customers',['customers'=>$customers]);
    }
    
    public function addProductDetails($id){
        $productId = decrypt($id);
        return view('admin.includes.add_product_details')->with('product_id',$productId);
        
    }
    
}

