<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($message = "")
    {
        $veiculos = Veiculo::get();
        return view('templete.views.auth.veiculo.index', compact('message', 'veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templete.views.auth.veiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request['tipo_combustivel'] != 'gasolina' && $request['tipo_combustivel'] != 'etanol' && $request['tipo_combustivel'] != 'diesel'){
            $request['tipo_combustivel'] = null;
        }
        $request->validate([
            'placa' => 'required|regex:/[A-Z0-9]{7}/',
            'name_veiculo' => 'required',
            'tipo_combustivel' => 'required',
            'fabricante' => 'required',
            'ano_fabricacao' => 'required|date',
            'capacidade' => 'required|regex:/[0-9]/',
        ]);
        
        $request->flash();

        $data = $request->all();
        $veiculo = Veiculo::create($data);
        if($veiculo){
            $message = "Veiculo cadastrado com sucesso !";
            return redirect()->route('veiculo.index', compact('message'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Veiculo $veiculo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veiculo = Veiculo::find($id)->first();
        return view('templete.views.auth.veiculo.edit', compact('veiculo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request['tipo_combustivel'] != 'gasolina' && $request['tipo_combustivel'] != 'etanol' && $request['tipo_combustivel'] != 'diesel'){
            $request['tipo_combustivel'] = null;
        }
        $request->validate([
            'placa' => 'required|regex:/[A-Z0-9]{7}/',
            'name_veiculo' => 'required',
            'tipo_combustivel' => 'required',
            'fabricante' => 'required',
            'ano_fabricacao' => 'required|date',
            'capacidade' => 'required|regex:/[0-9]/',
        ]);
        $request->flash();
        $data = $request->all();
        $update = Veiculo::find($id)->update($data);
        
        if($update){
            $message = "Veiculo atualizado com sucesso";
            return redirect()->route('veiculo.index', $message);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Veiculo::find($id)->delete();
        if($delete){
            $mensagem = "Veiculo excluido com sucesso !";
            return redirect()->route('veiculo.index', $mensagem);
        }
    }
}
