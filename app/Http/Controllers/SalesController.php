<?php

namespace App\Http\Controllers;

use App\Sales;
use App\Products;
use App\Category;
use App\Clients;
use App\User;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales=Sales::latest()->paginate(20);
        return view('sales.index',[
            'sales'=>$sales,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $venta=new Sales;
        $categorias = Category::select('id', 'name')->orderBy('name')->get();
        $clientes = Clients::select('id', 'name')->orderBy('name')->get();
        $products = Products::select('id', 'name')->orderBy('name')->get();
        $usuarios = User::select('id', 'name')->orderBy('name')->get();
        return view('sales.add', compact('categorias', 'clientes', 'usuarios', 'venta', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sales::create([
            'client_id'=>$request->client_id
            ,'product_id'=>$request->product_id
            ,'user_id'=>$request->user_id
            ,'quantity'=>$request->quantity,
            'category_id'=>$request->category_id

        ]);
        return redirect('/ventas')->with('mesage', 'La venta se ha agregado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $venta=Sales::findOrFail($id);
        $categorias = Category::select('id', 'name')->orderBy('name')->get();
        $clientes = Clients::select('id', 'name')->orderBy('name')->get();
        $usuarios = User::select('id', 'name')->orderBy('name')->get();
        return view('sales.edit', compact('categorias', 'clientes', 'usuarios', 'venta'));
    }


    public function update(Request $request, $id)
    {
        $venta=Sales::findOrFail($id);
        $venta->update($request->all());
        return redirect('/ventas')->with('mesage', 'la venta se ha actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sales)
    {
        $sales->delete();
        return redirect('/ventas')->with('mesage', 'la venta se ha eliminado exitosamente!');
    }
}
