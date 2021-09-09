<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tb_Caminhao;


class CaminhaoController extends Controller
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
        
        return view('caminhao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        Tb_caminhao::firstOrCreate([
            'numero_caminhao' => $request->numero_caminhao,
            'placa' => $request->placa, 
            'descricao' => $request->descricao,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'chassi'=> $request->chassi, 
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
        
        $caminhao =  Tb_caminhao::all();

        return view('caminhao.show', ['caminhao' => $caminhao]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caminhao = Tb_caminhao::findOrFail($id);


        
        return view('caminhao.edit', ['caminhao'=>$caminhao]);
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
        $caminhao = Tb_caminhao::findOrFail($id);

        $caminhao->update([
            'numero_caminhao' => $request->numero_caminhao,
            'placa' => $request->placa, 
            'descricao' => $request->descricao,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'chassi'=> $request->chassi, 
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
        $caminhao=Tb_caminhao::findOrFail($id);
        $caminhao->delete();

        return view('home');
    }
}
