@extends('layouts.main')

@section('title', 'Page Title')

@section('content')
<section class="pt-4 pb-3">
    <a class="btn btn-primary btn-send" href="{{ route('create') }}"> Cadastrar empresa </a>
</section>
<authorized-clients></authorized-clients>
<clients-component></clients-component>
<personal-access-tokens></personal-access-tokens>

@include('empresa.includes.list')
@endsection