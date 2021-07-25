<?php

namespace App\Http\Controllers;

use App\Models\Abastecimento;
use App\Models\Motorista;
use App\Models\Veiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbastecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($message = "")
    {
        $abastecimentos = DB::table('abastecimentos')
            ->join('motoristas', 'abastecimentos.motorista_id', '=', 'motoristas.id')
            ->join('veiculos', 'abastecimentos.veiculo_id', '=', 'veiculos.id')
            ->select('motoristas.name', 'veiculos.placa', 'abastecimentos.*')
            ->get();
        return view('templete.views.auth.abastecimento.index', compact('message', 'abastecimentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $motoristas = Motorista::get();
        $veiculos = Veiculo::get();
        return view('templete.views.auth.abastecimento.create', compact('motoristas', 'veiculos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request['tipo_combustivel'] == '---'){
            $request['tipo_combustivel'] = null;
        }
        if($request['veiculo_id'] == '---'){
            $request['tipo_combustivel'] = null;
        }
        if($request['motorista_id'] == '---'){
            $request['tipo_combustivel'] = null;
        }
        
        $veiculo = Veiculo::where('id', $request['veiculo_id'])->first();
        $motorista = Motorista::where('id', $request['motorista_id'])->first();

        if($veiculo->capacidade < $request['quantidade']){
            $request['quantidade'] = null;
        }
        if($veiculo->tipo_combustivel != $request['tipo_combustivel']){
            $request['tipo_combustivel'] = null;
        }
        
        $request->validate([
            'veiculo_id' => 'required',
            'motorista_id' => 'required',
            'tipo_combustivel' => 'required',
            'quantidade' => 'required|regex:/[0-9]/',
        ]);
        
        if($request['tipo_combustivel'] == 'gasolina'){
            $request['valor'] = floatval($request['quantidade'] * 4.29);
        }
        if($request['tipo_combustivel'] == 'etanol'){
            $request['valor'] = floatval($request['quantidade'] * 2.99);
        }
        if($request['tipo_combustivel'] == 'diesel'){
            $request['valor'] = floatval($request['quantidade'] * 2.09);
        }
        
        $data = $request->all();
        $abastecimento = Abastecimento::create($data);
        if($abastecimento){
            $message = "Abastecimento registrado com sucesso";
            return redirect()->route('abastecimento.index', $message);
        }
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Abastecimento  $abastecimento
     * @return \Illuminate\Http\Response
     */
    public function show(Abastecimento $abastecimento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Abastecimento  $abastecimento
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
     * @param  \App\Models\Abastecimento  $abastecimento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Abastecimento $abastecimento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abastecimento  $abastecimento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Abastecimento $abastecimento)
    {
        //
    }
}
