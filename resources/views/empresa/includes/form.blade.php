<section class="container-fluid bg-light py-3">
<a class="btn btn-primary btn-send"  href="{{ route('index') }}" > Lista de Empresas </a>
    <h1>Dados de cadastro</h1>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
    	<button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
    </div>
    @endif


    @if ($errors->has('nome_fantasia')) error="{{ $errors->first('nome_fantasia') }}" @endif
    @if ($errors->has('CNPJ'))<div class="alert alert-danger">{{ $errors->first('CNPJ') }}</div> @endif
    @if ($errors->has('razao_social'))<div class="alert alert-danger">{{ $errors->first('razao_social') }}</div> @endif
    @if ($errors->has('segmento'))<div class="alert alert-danger">{{ $errors->first('segmento') }}</div> @endif
    @if ($errors->has('inscricao_estadual'))<div class="alert alert-danger">{{ $errors->first('inscricao_estadual') }}</div> @endif
    @if ($errors->has('inscricao_municipal'))<div class="alert alert-danger">{{ $errors->first('inscricao_municipal') }}</div> @endif
    @if ($errors->has('telefone'))<div class="alert alert-danger">{{ $errors->first('telefone') }}</div> @endif
    @if ($errors->has('email'))<div class="alert alert-danger">{{ $errors->first('email') }}</div> @endif
    @if ($errors->has('CEP'))<div class="alert alert-danger">{{ $errors->first('CEP') }}</div> @endif
    @if ($errors->has('cidade'))<div class="alert alert-danger">{{ $errors->first('cidade') }}</div> @endif
    @if ($errors->has('estado'))<div class="alert alert-danger">{{ $errors->first('estado') }}</div> @endif
    @if ($errors->has('logradouro'))<div class="alert alert-danger">{{ $errors->first('logradouro') }}</div> @endif
    @if ($errors->has('bairro'))<div class="alert alert-danger">{{ $errors->first('bairro') }}</div> @endif
    @if ($errors->has('complemento'))<div class="alert alert-danger">{{ $errors->first('complemento') }}</div> @endif
    @if ($errors->has('numero'))<div class="alert alert-danger">{{ $errors->first('numero') }}</div> @endif
    
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
                    errors = "{{ $errors }}"
                    action="{{ empty($empresa) ? 'store' : 'update' }}" 
                    action_url="{{ !empty($empresa) ? route('update', $empresa->id) : route('store') }}"
                    csfr_token= "{{ csrf_token() }}"
                    delete_route="{{ empty($empresa) ? 'store' : route('destroy', $empresa->id) }}"></form-component>
</section>