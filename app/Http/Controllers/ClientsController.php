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
        return redirect('/clientes')->with('mesageUpdate', 'El cliente se ha agregado exitosamente!');
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
        return redirect('/clientes')->with('mesageUpdate', 'Cliente actualizado correctamente');
    }

    public function delete(Clients $cliente)
    {
        $cliente->delete();
        return redirect('/clientes')->with('mesageDelete', 'Cliente eliminado correctamente');
    }
}
