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

     /**
     * Store a newly created resource in storage.
     */
    public function storeProducts(Request $request)
    {

            $request->validate([
                'name'         =>  'required',
                'animal_id'         =>  'required',
                'contents'   =>  'required',
                'price'        =>  'required',
                'image'        =>  'required',
                'store_name'    =>   'required',
                'store_location'    =>   'required'
            ]);
    
            $product = new Product;
    
            $product->name = $request->name;
            $product->animal_id = $request->animal_id;
            $product->contents = $request->contents;
            $product->price = $request->price;
            $product->image = $request->image;
            $product->store_name = $request->store_name;
            $product->store_location = $request->store_location;
            
            $product->save();
    
            return redirect()->route('index')->with('success', 'Product Added successfully.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeMedicines(Request $request)
    {

        $request->validate([
            'name'         =>  'required',
            'contents'   =>  'required',
            'animal_id'         =>  'required',
            'price'        =>  'required',
            'clinic_name'    =>   'required',
            'image'        =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',
            'clinic_location'    =>   'required'
        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('SuppliesImages'), $file_name);

        $medicine = new Medicine;

        $medicine->name = $request->name;
        $medicine->contents = $request->contents;
        $medicine->animal_id = $request->animal_id;
        $medicine->price = $request->price;
        $medicine->image = $file_name;
        $medicine->clinic_name = $request->clinic_name;
        $medicine->clinic_location = $request->clinic_location;
        
        $medicine->save();

        return redirect()->route('index')->with('success', 'Medicine Added successfully.');
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function showProducts(Product $Product)
    {
        return view('show', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicines  $medicines
     * @return \Illuminate\Http\Response
     */
    public function showMedicines(Medicine $medicine)
    {
        return view('show', compact('data'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function updateProducts(Request $request, Product $product)
    {

        $product = Product::find($request->hidden_id);
        $product->name = $request->name;
        $product->animal_id = $request->animal_id;
        $product->contents = $request->contents;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->store_name = $request->store_name;
        $product->store_location = $request->store_location;
        $product->save();

        return redirect()->route('index')->with('success', 'product Data has been updated successfully');
    }


    /**
     * Update the specified resource in storage.
     */
    public function updateMedicines(Request $request, Medicine $medicine)
    {

        $medicine = Medicine::find($request->hidden_id);
        $medicine->name = $request->name;
        $medicine->contents = $request->contents;
        $medicine->animal_id = $request->animal_id;
        $medicine->price = $request->price;
        $medicine->image = $request->image;
        $medicine->clinic_name = $request->clinic_name;
        $medicine->clinic_location = $request->clinic_location;
        $medicine->save();

        return redirect()->route('index')->with('success', 'Medicine Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyProducts(Product $product)
    {
        $product->delete();

        return redirect()->route('index')->with('success', 'Product Data deleted successfully');
    }

       /**
     * Remove the specified resource from storage.
     */
    public function destroyMedicines(Medicine $medicine)
    {
        $medicine->delete();

        return redirect()->route('index')->with('success', 'Medicine Data deleted successfully');
    }

}
 
?>