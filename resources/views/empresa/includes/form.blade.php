<section class="container-fluid bg-light py-3">
<a class="btn btn-primary btn-send"  href="{{ route('index') }}" > Lista de Empresas </a>
    <h1>Dados de cadastro</h1>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
    	<button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
    </div>
    @endif
    <form method="post"  action="{{ !empty($empresa) ? route('update', $empresa->id) : route('store') }}" 
        enctype="multipart/form-data">
        @csrf
            <form-component nome_fantasia="{{ old('nome_fantasia') ?? $empresa->nome_fantasia ?? null }}"
                            cnpj = "{{ old('CNPJ') ?? $empresa->CNPJ ?? null }}"
                            razao_social = "{{ old('razao_social') ?? $empresa->razao_social ?? null }}"
                            cep = "{{ old('CEP') ?? $empresa->CEP ?? null }}"
                            logradouro = "{{ old('logradouro') ?? $empresa->logradouro ?? null }}"
                            numero = "{{ old('numero') ?? $empresa->numero ?? null }}"
                            telefone = "{{ old('telefone') ?? $empresa->telefone ?? null }}"
                            email = "{{ old('email') ?? $empresa->email ?? null }}"
                            complemento = "{{ old('complemento') ?? $empresa->complemento ?? null }}"
                            bairro = "{{ old('bairro') ?? $empresa->bairro ?? null }}"
                            cidade = "{{ old('cidade') ?? $empresa->cidade ?? null }}"
                            estado = "{{ old('estado') ?? $empresa->estado ?? null }}"
                            segmento = "{{ old('segmento') ?? $empresa->segmento ?? null }}"
                            inscricao_municipal = "{{ old('inscricao_municipal') ?? $empresa->inscricao_municipal ?? null }}"
                            inscricao_estadual = "{{ old('inscricao_estadual') ?? $empresa->inscricao_estadual ?? null }}"
                            erros = "{{ $errors }}"
                            @if ($errors->has('nome_fantasia')) error="{{ $errors->first('nome_fantasia') }}" @endif></form-component>

        <div class="row">
            <div class="col-md-6">
            @if(empty($empresa))
                <button type="sybmit" class="btn btn-primary btn-send" >Cadastrar</button>
            @else
                <button type="sybmit" class="btn btn-success btn-send" >Salvar</button>
                <a class="btn btn-danger btn-send" href="{{ route('destroy', $empresa->id) }}">Deletar</a>
            @endif 
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted"><strong>*</strong> These fields are required.</p>
            </div>
        </div>
    </form>
</section>