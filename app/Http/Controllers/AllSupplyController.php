<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Models\Product;
 
class AllSupplyController extends Controller
{
    function index()
    {
        $data = Product::join('medicine', 'medicine.animal_id', '=', 'product.animal_id')
                    ->get(['*']);
        $data1 = Product::join('medicine', 'medicine.animal_id', '!=', 'product.animal_id')
                    ->get(['*']);            
 
        return view('pages.all_supply', compact('data'), compact('data1'));
    }
}
 
?>