<?php

namespace App\Repositories;
use App\Empresa;

use App\Repositories\Contracts\EmpresaRepositoryInterface;

class EmpresaRepository implements EmpresaRepositoryInterface
{
    protected $empresas = null;

    public function __construct(Empresa $empresas) {
        $this->empresas = $empresas;
    }

         /**
     * Get's a empresa by it's ID
     *
     * @param int
     */
    public function get($empresa_id)
    {
        return $this->empresas->findOrFail($empresa_id);
    }

    /**
     * Get's all empresas.
     *
     * @return mixed
     */
    public function all()
    {
        return $empresas = $this->empresas->all();
    }

    /**
     * Create all empresas.
     *
     * @return mixed
     */
    public function create($empresa)
    {
        $this->empresas->create($empresa);
    }
    /**
     * Deletes a empresa.
     *
     * @param int
     */
    public function delete($empresa_id)
    {
        $empresa = $this->empresas->findOrFail($empresa_id);
        return $empresa->delete();
    }

    /**
     * Updates a empresa.
     *
     */
    public function update($empresa_id, $empresa_data)
    {
        $empresa = $this->empresas->findOrFail($empresa_id);
        return $empresa->update($empresa_data);
    }
}
