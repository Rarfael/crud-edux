<div class="box box-solid">
    <div class="pb-3">
        <h3>Empresas Cadastradas</h3>
        <a class="btn btn-primary btn-send"  href="{{ route('create') }}" > Cadastrar empresa </a>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>CNPJ</th>
                    <th>email</th>
                    <th>telefone</th>
                    <th>local</th>
                    <th width="1%"><i>i</i></th>
                </tr>
                </thead>
                <tbody>
                @forelse($empresas as $empresa)
                    <tr>
                        <td>{{ $empresa->nome_fantasia}}</td>
                        <td>{{ $empresa->CNPJ }}</td>
                        <td>{{ $empresa->email}}</td>
                        <td>{{ $empresa->telefone}}</td>
                        <td>{{ $empresa->cidade }} - {{ $empresa->estado }}</td>
                        <td>
                            <a href="{{ route('show', $empresa->id) }}">Abrir</a>
                        </td>
                    </tr>
                @empty
                    <tr class="text-center">
                        <td colspan="3">Nenhuma empresa cadastrada até o momento.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>