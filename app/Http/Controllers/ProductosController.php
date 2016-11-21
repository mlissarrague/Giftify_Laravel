<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\productos;
use \App\Categories;
use \App\Products;
use Storage;
use Auth;

class ProductosController extends Controller
{

    public function NuevoProducto(Productos $request){
      $Product = Products::create([
        'title' => $request->title,
        'photo_1' => $request->foto1,
        'photo_2' => $request->foto2,
        'photo_3' => $request->foto3,
        'photo_4' => $request->foto4,
        'photo_5' => $request->foto5,
        'description' => $request->description,
        'id_categoria' => $request->categoria,
        'prize' => $request->prize,
        'id_user' => Auth::user()->id,
      ]);

    }
    public function showCategories(){
      if (Auth::check()) {
        $categories = Categories::all();
        return view('paginas.create', compact('categories'));
      }
    }
    public function showProductos(){
      $products = Products::all();
      return view('paginas.productos', compact('products'));
    }

}
