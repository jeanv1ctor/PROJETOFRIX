<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Tb_Abastecimentoext;
use App\Models\Tb_Veiculo;
use App\User;
use App\Auth;




class AsbastecimentoExtController extends Controller
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

        
        return view('abastecimentoext.create',  ['veiculo' => $veiculo]);
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

          

            Tb_abastecimentoext::create([
                'numero_veiculo' => $request->numero_veiculo,
                'quantidade_abastecida' => $request->quantidade_abastecida, 
                'tipo_combustivel'=>$request->tipo_combustivel,
                'km' => $request->km,
                'carga' => $request->carga,
                'motorista' => $request->motorista,
                'num_nota' => $request->num_nota,
                'valor_nota' => $request->valor_nota,
                'nome_posto' => $request->nome_posto
            ]);

        }
    
        else{
             // se não existir
             return redirect()->back()->with(['message' => 'Veículo não cadastrado!']);

        }

        return view('home');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AbastecimentoExt  $abastecimentoExt
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $abastecimentoExt =  Tb_AbastecimentoExt::all();

       

        return view('abastecimentoext.show', ['abastecimentoExt' => $abastecimentoExt]);
    }

}
