<?php

namespace App\Http\Controllers;

use App\Models\Motorista;
use Illuminate\Http\Request;

class MotoristaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($message = "")
    {
        $motoristas = Motorista::get();
        return view('templete.views.auth.motorista.index', compact('message', 'motoristas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templete.views.auth.motorista.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request['status'] != 'inativo' && $request['status'] != 'ativo'){
            $request['status'] = null;
        }
        $request->validate([
            'name' => 'required',
            'num_cnh' => 'required|regex:/[0-9]{11}/',
            'categoria_cnh' => 'required|regex:/[a-eA-E]{1}/',
            'data_nasc' => 'required|date',
            'status' => 'required',
        ]);
        $request->flash();
        $request['categoria_cnh'] = strtoupper($request['categoria_cnh']);
        
        $data = $request->all();
        $motorista = Motorista::create($data);
        if($motorista){
            $message = "Motorista cadastrado com sucesso !";
            return redirect()->route('motorista.index', compact('message'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Motorista  $motorista
     * @return \Illuminate\Http\Response
     */
    public function show(Motorista $motorista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Motorista  $motorista
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motorista = Motorista::where('id', $id)->first();
        return view('templete.views.auth.motorista.edit', compact('motorista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Motorista  $motorista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request['status'] != 'inativo' && $request['status'] != 'ativo'){
            $request['status'] = null;
        }
        $request->validate([
            'name' => 'required',
            'num_cnh' => 'required|regex:/[0-9]{11}/',
            'categoria_cnh' => 'required|regex:/[a-eA-E]{1}/',
            'data_nasc' => 'required|date',
            'status' => 'required',
        ]);
        $request->flash();
        $data = $request->all();
        $update = Motorista::find($id)->update($data);
        
        if($update){
            $message = "Motorista atualizado com sucesso";
            return redirect()->route('motorista.index', $message);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Motorista  $motorista
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Motorista::find($id)->delete();
        if($delete){
            $mensagem = "Motorista excluido com sucesso !";
            return redirect()->route('motorista.index', $mensagem);
        }
    }
}
