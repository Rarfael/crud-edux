<?php

namespace Tests\Feature;

use Tests\TestCase;

use App\Empresa;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EmpresaRoutesTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRoutes()
    {
        $index = $this->get(route('index'));
        $index->assertStatus(200);

        $create = $this->get(route('create'))->assertStatus(200);
        $create->assertStatus(200);

        $empresa = factory(Empresa::class)->create()->id;
        $show = $this->get(route('show', $empresa));
        $show->assertStatus(200);

        $edit = $this->get(route('edit', $empresa));
        $edit->assertStatus(200);

        $edit = $this->get(route('destroy', $empresa));
        $edit->assertStatus(302);
    }
}
