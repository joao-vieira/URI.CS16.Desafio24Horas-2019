@extends('app')


@section('page_title', 'Dicionário')



@section('breadcrumbs')

    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>  
    <li class="breadcrumb-item"><a href="javascript:void(0)">Dicionário</a></li>  

@endsection



@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-body">
            
            O conteúdo do dicionário vai aqui

        </div>
    </div>
</div>
    
@endsection