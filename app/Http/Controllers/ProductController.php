<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

  //  protected $name;
  //  protected $price;
   // protected $status;


   // public function _construct() 
   // {
   //     $this->name = new Product();
   //     $this->price = new Product();
   //     $this->status = new Product();
   // }

    public function index()
    {
        return view('pages.Product.product-register');
    }


   // public function store(Request $request)
   // {
   //     $this->store->create($request ->all());
   // }

   public function store(Request $request){

    error_log('message in product controller');
    error_log($request->name);
    // $product = new Product;
    // $this->validate($request,['name'=>'required' ,]);
    // $this->validate($request,['price'=>'required' ,]);
    // $this->validate($request,['status'=>'required' ,]);

    
    DB::table('products')->insert( ['name' => $request->name, 'price' => $request->price, 'status' => 1] );

    session()->flash('message',$product['name'].'new product added successfully!');
   }


}
