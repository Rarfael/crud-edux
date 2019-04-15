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
        <h2>Empresa</h2>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Nome Fantasia *</label>
                    <input type="text" name="nome_fantasia" value="{{ old('nome_fantasia') ?? $empresa->nome_fantasia ?? null }}" class="form-control" placeholder="Nomda da Empresa" required="required" >
                    @if ($errors->has('nome_fantasia'))<div class="alert alert-danger">{{ $errors->first('nome_fantasia') }}</div> @endif
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>CNPJ *</label>
                    <input type="text" name="CNPJ" class="form-control" value="{{ old('CNPJ') ?? $empresa->CNPJ ?? null }}" placeholder="Ex: 12345678912345" data-error="Valid email is required.">
                    @if ($errors->has('CNPJ'))<div class="alert alert-danger">{{ $errors->first('CNPJ') }}</div> @endif
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Razão Social *</label>
                    <input type="text" name="razao_social" value="{{ old('razao_social') ?? $empresa->razao_social ?? null }}" class="form-control" placeholder="Razão Social">
                    @if ($errors->has('razao_social'))<div class="alert alert-danger">{{ $errors->first('razao_social') }}</div> @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                <label >Segmento</label>
                  <select name="segmento" class="form-control" value="{{ old('segmento') ?? $empresa->segmento ?? null }}" >
                    <option>Produto</option>
                    <option>Serviço</option>
                    <option>Produto e Serviço</option>
                  </select>
                  @if ($errors->has('segmento'))<div class="alert alert-danger">{{ $errors->first('segmento') }}</div> @endif
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Inscrição Estadual *</label>
                    <input type="text" name="inscricao_estadual" value="{{ old('inscricao_estadual') ?? $empresa->inscricao_estadual ?? null }}" class="form-control" placeholder="Inscrição estadual *" required="required" data-error="Valid email is required.">
                    @if ($errors->has('inscricao_estadual'))<div class="alert alert-danger">{{ $errors->first('inscricao_estadual') }}</div> @endif
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Inscrição Municipal </label>
                    <input type="text" name="inscricao_municipal" value="{{ old('inscricao_municipal') ?? $empresa->inscricao_municipal ?? null }}" class="form-control" placeholder="Inscrição municipal">
                    @if ($errors->has('inscricao_municipal'))<div class="alert alert-danger">{{ $errors->first('inscricao_municipal') }}</div> @endif
                </div>
            </div>
        </div>

        <h3>Contato</h3>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Telefone *</label>
                    <input type="tel" name="telefone" value="{{ old('telefone') ?? $empresa->telefone ?? null }}" class="form-control" placeholder="Por favor escrava o numero de telefone" required="required" data-error="name is required.">
                    @if ($errors->has('telefone'))<div class="alert alert-danger">{{ $errors->first('telefone') }}</div> @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Email *</label>
                    <input type="email" name="email" value="{{ old('email') ?? $empresa->email ?? null }}" class="form-control" placeholder="Por favor digite o e-mail" required="required" data-error="name is required.">
                    @if ($errors->has('email'))<div class="alert alert-danger">{{ $errors->first('email') }}</div> @endif
                </div>
            </div>
        </div>

        <h3>Endereço</h3>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>CEP *</label>
                    <input type="number" name="CEP" value="{{ old('CEP') ?? $empresa->CEP ?? null }}" class="form-control" placeholder="Por favor digite o cep" required="required" data-error="name is required.">
                    @if ($errors->has('CEP'))<div class="alert alert-danger">{{ $errors->first('CEP') }}</div> @endif
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label >Cidade *</label>
                    <input type="text" name="cidade" value="{{ old('cidade') ?? $empresa->cidade ?? null }}" class="form-control" placeholder="Por favor informe a cidade *" required="required" data-error="Valid email is required.">
                    @if ($errors->has('cidade'))<div class="alert alert-danger">{{ $errors->first('cidade') }}</div> @endif
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Estado *</label>
                    <input type="text" name="estado" value="{{ old('estado') ?? $empresa->estado ?? null }}" class="form-control" placeholder="Por favor informe o estado">
                    @if ($errors->has('estado'))<div class="alert alert-danger">{{ $errors->first('estado') }}</div> @endif
                </div>
            </div>
        </div>
                <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Logradouro *</label>
                    <input type="text" name="logradouro" value="{{ old('logradouro') ?? $empresa->logradouro ?? null }}" class="form-control" placeholder="Logradouro" required="required">
                    @if ($errors->has('logradouro'))<div class="alert alert-danger">{{ $errors->first('logradouro') }}</div> @endif
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Bairro *</label>
                    <input type="text" name="bairro" value="{{ old('bairro') ?? $empresa->bairro ?? null }}" class="form-control" placeholder="Bairro" required="required" data-error="Valid email is required.">
                    @if ($errors->has('bairro'))<div class="alert alert-danger">{{ $errors->first('bairro') }}</div> @endif
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Complemento *</label>
                    <input type="text" name="complemento" value="{{ old('complemento') ?? $empresa->complemento ?? null }}" class="form-control" placeholder="Complemento">
                    @if ($errors->has('complemento'))<div class="alert alert-danger">{{ $errors->first('complemento') }}</div> @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Numero *</label>
                    <input type="text" name="numero" value="{{ old('numero') ?? $empresa->numero ?? null }}" class="form-control" placeholder="numero" required="required" data-error="name is required.">
                    @if ($errors->has('numero'))<div class="alert alert-danger">{{ $errors->first('numero') }}</div> @endif
                </div>
            </div>
        </div>

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