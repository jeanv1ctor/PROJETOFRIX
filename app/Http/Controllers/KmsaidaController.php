<?php

namespace App\Http\Controllers;

use App\Kmsaida;
use Illuminate\Http\Request;
use App\Models\Tb_Kmsaida;
use App\Models\Tb_veiculo;
use App\User;
use App\Auth;

class KmsaidaController extends Controller
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
        $veiculo =  Tb_veiculo::all();

        
        return view('kmsaida.create',  ['veiculo' => $veiculo]);
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

          

            Tb_Kmsaida::create([
                'numero_veiculo' => $request->numero_veiculo,
                'km_saida' => $request->km_saida,
                'carga' => $request->carga,
                'motorista' => $request->motorista
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
     * @param  \App\Kmsaida  $Kmsaida
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $kmsaida =  Tb_Kmsaida::all();

       

        return view('kmsaida.show', ['kmsaida' => $kmsaida]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kmsaida  $Kmsaida
     * @return \Illuminate\Http\Response
     */
    public function edit(Kmsaida $Kmsaida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kmsaida  $Kmsaida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kmsaida $Kmsaida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kmsaida  $Kmsaida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kmsaida $Kmsaida)
    {
        //
    }
}
