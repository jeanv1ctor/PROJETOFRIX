<?php

namespace App\Http\Controllers;

use App\Abastecimento;
use Illuminate\Http\Request;
use App\Models\Tb_Abastecimento;
use App\Models\Tb_Caminhao;
use App\User;

class AbastecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     */

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caminhao =  Tb_caminhao::all();

        
        return view('abastecimento.create',  ['caminhao' => $caminhao]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Tb_abastecimento::create([
            'numero_caminhao' => $request->numero_caminhao,
            'quantidade_abastecida' => $request->quantidade_abastecida, 
            'tipo_combustivel'=>$request->tipo_combustivel,
            'km' => $request->km,
            'carga' => $request->carga
        ]);

        return view('home');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Abastecimento  $abastecimento
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $abastecimento =  Tb_abastecimento::all();

        return view('abastecimento.show', ['abastecimento' => $abastecimento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Abastecimento  $abastecimento
     * @return \Illuminate\Http\Response
     */
    public function edit(Abastecimento $abastecimento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Abastecimento  $abastecimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abastecimento $abastecimento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Abastecimento  $abastecimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abastecimento $abastecimento)
    {
        //
    }
}
