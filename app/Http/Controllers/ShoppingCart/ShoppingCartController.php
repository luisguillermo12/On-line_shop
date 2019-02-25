<?php

namespace Massaggi\Http\Controllers\ShoppingCart;

use Illuminate\Http\Request;
use Massaggi\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use Massaggi\User;
use Massaggi\Publications;
use Massaggi\ParametersSystem;
use Illuminate\Support\Facades\Storage;
use Massaggi\ShoppingCart;
class ShoppingCartController extends Controller
{

    public function add($id){
    	$add_publication = new ShoppingCart();
        $add_publication->publication_id = $id;
        $add_publication->user_id = Auth::user()->id;
        $add_publication->save();
        alert()->success('Produc add Shopping cart', 'Successfully');
        return redirect()->back();
    }

    public function index(){
    	$cart = ShoppingCart::where('user_id',Auth::user()->id)->get();
       
       //dd($cart);
    }

}
