<?php

namespace App\Repositories\Contracts;

interface EmpresaRepositoryInterface
{
     /**
     * Get's a empresa by it's ID
     *
     * @param int
     */
    public function get($empresa_id);

    /**
     * Get's all empresas.
     *
     * @return mixed
     */
    public function all();

    /**
     * Create all empresas.
     *
     * @return mixed
     */
    public function create($empresa);

    /**
     * Deletes a empresa.
     *
     * @param int
     */
    public function delete($empresa_id);

    /**
     * Updates a empresa.
     *
     */
    public function update($empresa_id, $empresa_data);
}