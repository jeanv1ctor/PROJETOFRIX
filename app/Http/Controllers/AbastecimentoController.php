<?php

namespace App\Http\Controllers;

use App\Abastecimento;
use Illuminate\Http\Request;
use App\Models\Tb_Abastecimento;
use App\Models\Tb_Veiculo;
use App\User;
use App\Auth;

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
        $veiculo =  Tb_veiculo::all();

        
        return view('abastecimento.create',  ['veiculo' => $veiculo]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = auth()->user();

        if (Tb_veiculo::where('numero_veiculo', $request->numero_veiculo)->first()){

          

            Tb_abastecimento::create([
                'numero_veiculo' => $request->numero_veiculo,
                'quantidade_abastecida' => $request->quantidade_abastecida, 
                'tipo_combustivel'=>$request->tipo_combustivel,
                'km' => $request->km,
                'carga' => $request->carga,
                'user_id' => $user->id
            ]);

        }
    
        else{
             // It does not exist
             return redirect()->back()->with(['message' => 'Veículo não cadastrado!']);

        }

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

        //$donoAbastecimento = User::where('id', $user->id)->first()->toArray();

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
