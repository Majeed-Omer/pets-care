<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Models\Product;

use App\Models\Medicine;
 
class AllSupplyController extends Controller
{
    function index()
    { 
        $product = Product::all();
        $medicine = Medicine::all();
        return view('pages.all_supplies.all_supplies_page', compact('product'), compact('medicine'));
    }
}
 
?>