<?php

namespace App\Http\Controllers;

use App\AbastecimentoExt;
use Illuminate\Http\Request;
use App\Models\Tb_AbastecimentoExt;
use App\Models\Tb_Veiculo;
use App\User;
use App\Auth;




class TbAsbastecimentoExtController extends Controller
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

          

            Tb_abastecimentoExt::create([
                'numero_veiculo' => $request->numero_veiculo,
                'quantidade_abastecida' => $request->quantidade_abastecida, 
                'tipo_combustivel'=>$request->tipo_combustivel,
                'km' => $request->km,
                'carga' => $request->carga,
                'user_id' => $user->id,
                'motorista' => $request->motorista,
                'num_nota' => $request->num_nota,
                'nome_posto' => $request->nome_posto
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
        $abastecimento =  Tb_abastecimentoExt::all();

        //$donoAbastecimento = User::where('id', $user->id)->first()->toArray();

        return view('abastecimento.show', ['abastecimento' => $abastecimento]);
    }

}
