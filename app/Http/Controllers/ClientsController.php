<?php

namespace App\Http\Controllers;

use App\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=Clients::latest()->paginate(20);
        return view('client.index',[
            'clients'=>$clients,
        ]);
    }


    public function create()
    {
        $cliente=new Clients;
        return view('client.add', compact('cliente'));
    }


    public function store(Request $request)
    {
        Clients::create([

            'name'=>$request->name,
            'home_address'=>$request->home_address,
            //'phone_number'=>$request->phone_number
        ]);
    }


    public function edit($id)
    {
        $cliente=Clients::findOrFail($id);
        return view('client.edit',[
            'cliente'=>$cliente,
        ]);
    }


    public function update(Request $request, $id)
    {
        $cliente=Clients::findOrFail($id);
        $cliente->update($request->all());
        return redirect('/cliente')->with('mesage', 'Cliente actualizado correctamente');
    }

    public function destroy( $id)
    {
        $clien->delete();
        return redirect('/cliente')->with('mesage', 'Cliente eliminado correctamente');
    }
}
