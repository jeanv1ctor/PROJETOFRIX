<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tb_Veiculo;


class veiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('veiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // função para criar um novo registro de veiculo

        Tb_veiculo::firstOrCreate([ 
            'numero_veiculo' => $request->numero_veiculo,
            'placa' => $request->placa, 
            'descricao' => $request->descricao,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'chassi'=> $request->chassi,
            'renavan' => $request->renavan,
            'eixo'=> $request->eixo,
            'autonomia' => $request->autonomia, 
            'ano' => $request->ano, 
            'fabricacao'=>$request->fabricacao
        ]);

        return view('home');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //função para listar um novo registro de veículo

        $veiculo =  Tb_veiculo::all();

        return view('veiculo.show', ['veiculo' => $veiculo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        //função para listar um veiculo editavel

        $veiculo = Tb_veiculo::findOrFail($id);


        
        return view('veiculo.edit', ['veiculo'=>$veiculo]);
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
        //função para registrar o que foi editado no veículo

        $veiculo = Tb_veiculo::findOrFail($id);

        $veiculo->update([
            'numero_veiculo' => $request->numero_veiculo,
            'placa' => $request->placa, 
            'descricao' => $request->descricao,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'chassi'=> $request->chassi,
            'renavan' => $request->renavan,
            'eixo' => $request->eixo,
            'autonomia' => $request->autonomia, 
            'ano' => $request->ano, 
            'fabricacao'=>$request->fabricacao
        ]);

        return view('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //função para excluir o veículo

        $veiculo=Tb_veiculo::findOrFail($id);
        $veiculo->delete();

        return view('home');
    }
}
