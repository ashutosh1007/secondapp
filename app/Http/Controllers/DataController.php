<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categories;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function saveData(Request $request){
    DB::table('categories')->insert([
    ['category_name' => 'Sample Tshirts', 'votes' => 0]
]);
        return"Done";
        //return redirect('/sampleform');
    }
}
