<?php

namespace App\Http\Controllers;

use App\Products;
use App\Category;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    use SoftDeletes;

    public function index()
    {
        $products=Products::latest()->paginate(20);
        return view('productos.index',[
            'products'=>$products,
        ]);
    }

    public function create(){
        $producto=new Products;
        $categorias = Category::select('id', 'name')->orderBy('name')->get();
        return view('productos.add', compact('categorias', 'producto'));
    }

    public function store(Request $request)
    {
        Products::create([
            'name'=>$request->name,
            'precio'=>$request->precio,
            'cantidad'=>$request->cantidad,
            'category_id'=>$request->category_id,
        ]);
        return redirect('/productos')->with('mesage', 'el producto se ha agregado exitosamente!');
    }

    public function edit($id)
    {
        $product=Products::findOrFail($id);
        return view('productos.edit',[
            'product'=>$product,
        ]);
    }

    public function update(Request $request,$id)
    {
        $product=Products::findOrFail($id);
        $product->update($request->all());

        return redirect('/productos')->with('mesage', 'el producto se ha actualizado exitosamente!');
    }


    public function delete(Products $product){
        
        $product->delete();
        return redirect('/productos')->with('mesageDelete', 'el producto se ha eliminado exitosamente!');
    }
}
