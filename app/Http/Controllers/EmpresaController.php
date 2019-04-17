<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmpresaRequest;
use App\Repositories\Contracts\EmpresaRepositoryInterface;

class EmpresaController extends Controller
{
    protected $empresas = null;

    public function __construct(EmpresaRepositoryInterface $empresas) {
        $this->empresas = $empresas;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = $this->empresas->all();
        return view('empresa.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmpresaRequest $request)
    {
        $this->empresas->create($request->all());
        return redirect()->route('create')
                        ->with('success','Empresa cadastrada com sucessso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = $this->empresas->get($id);
        return view('empresa.empresa', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = $this->empresas->get($id);
        return view('empresa.update', compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmpresaRequest $request, $id)
    {
        $this->empresas->update($id, $request->all());
        return redirect()->route('edit', $id)
                ->with('success','Dados atualizados com sucessso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empresa = $this->empresas->get($id);
        $empresa->delete();
        return redirect()->route('index')
                ->with('success','Empresa deletada!');
    }
}
