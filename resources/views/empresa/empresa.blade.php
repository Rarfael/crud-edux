@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<section class="row">
	<div class="col-md-12 col-lg-6">
        <div class="col-sm-12">
            <div class="col-xs-12 col-sm-8">
                <h2>{{ $empresa->nome_fantasia }}</h2>
                <p><strong>CNPJ: </strong> {{ $empresa->CNPJ }} </p>
                <p><strong>Razão Social: </strong> {{ $empresa->razao_social }}</p>
                <p><strong>CEP: </strong> {{ $empresa->CEP }} </p>
                <p><strong>Skills: </strong>
                    <span class="tags">html5</span> 
                    <span class="tags">css3</span>
                    <span class="tags">jquery</span>
                    <span class="tags">bootstrap3</span>
                </p>
            </div>
        </div>
	</div>
</section>
@endsection