<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Computador;
use App\Models\Fornecedor;
use App\Models\Modelo;
use Illuminate\Http\Request;

class ComputadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computadores = Computador::OrderBy('id','DESC')->get();
        return view ('computadores.index',compact('computadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modelos = Modelo::orderBy('modelo')->get();
        $clientes = Cliente::orderBy('cliente')->get();
        $fornecedores = Fornecedor::orderBy('fornecedor')->get();
        return view ('computadores.create',compact('modelos','clientes','fornecedores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'modelo_id' => 'required|exists:modelos,id',
            'cliente_id' => 'required|exists:clientes,id',
            'fornecedor_id' => 'required|exists:fornecedors,id'
        ]);

        $data = $request->all();

        $modelo = Modelo::findOrFail($data['modelo_id']);
        $marca_id = $modelo->marca_id;
        $tipo_id = $modelo->tipo_id;

        $computador = new Computador();
        $computador->serialnr = $data['serialnr'];
        $computador->marca_id = $marca_id;
        $computador->tipo_id = $tipo_id;
        $computador->limasoft = $data['limasoft'];
        $computador->modelo_id = $data['modelo_id'];
        $computador->recondicionado = $data['recondicionado'];
        $computador->sokey = $data['sokey'];
        $computador->fornecedor_id = $data['fornecedor_id'];
        $computador->faturac = $data['faturac'];
        $computador->datafaturac = $data['datafaturac'];
        $computador->cliente_id = $data['cliente_id'];
        $computador->faturav = $data['faturav'];
        $computador->datafaturav = $data['datafaturav'];
        $computador->obs = $data['obs'];

        $computador->save();
        return redirect(route('computadores.index'))->with('success','Computador criado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
