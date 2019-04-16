@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<section class="row">
	<div class="col-md-12 col-lg-6">
        <div class="col-sm-12">
            <div class="col-xs-12 col-sm-8">
                <h2>{{ $empresa->nome_fantasia }}</h2>

                <p><strong>CNPJ: </strong> {{ $empresa->CNPJ }} </p>
                <p><strong>Razao Social: </strong> {{ $empresa->razao_social }} </p>
                <p><strong>CEP: </strong> {{ $empresa->CEP }} </p>
                <p><strong>Logradouro: </strong> {{ $empresa->logradouro }} </p>
                <p><strong>Numero: </strong> {{ $empresa->numero }} </p>
                <p><strong>Telefone: </strong> {{ $empresa->telefone }} </p>
                <p><strong>Email: </strong> {{ $empresa->email }} </p>
                <p><strong>Complemento: </strong> {{ $empresa->complemento }} </p>
                <p><strong>Bairro: </strong> {{ $empresa->bairro }} </p>
                <p><strong>Cidade: </strong> {{ $empresa->cidade }} </p>
                <p><strong>Estado: </strong> {{ $empresa->estado }} </p>
                <p><strong>Segmento: </strong> {{ $empresa->segmento }} </p>
                <p><strong>Inscricao Municipal: </strong> {{ $empresa->inscricao_municipal }} </p>
                <p><strong>Inscricao Estadual: </strong> {{ $empresa->inscricao_estadual }} </p>
            </div>
        </div>
	</div>
</section>
@endsection