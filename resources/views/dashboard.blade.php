@extends('app')


@section('page_title', 'Dashboard')



@section('breadcrumbs')

    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>  

@endsection



@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-body">
            
            <div class="row">
                <div class="col-md-8">
                    <h4 class="card-title">OEE: Qualidade x Performance x Disponibilidade</h4>
                    <div id="dashboard-bar"></div>
                </div>
                <div class="col-md-4">
                    <h4 class="card-title">Eficiência Total</h4>
                    <div id="dashboard-donut"></div>
                </div>
            </div>
            
            <div class="row" style="margin-top: 10%">
                <div class="col-md-12">
                    <h3 class="card-title">Produção Diária</h3>
                    <h5 class="card-subtitle">Metros Bons x Metros Refugados</h5>
                                        
                    <h5 class="m-t-30">Metros Bons<span class="pull-right">75%</span></h5>
                    <div class="progress ">
                        <div class="progress-bar bg-success wow animated progress-animated" style="width: 75%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                    </div>

                    <h5 class="m-t-30">Metros Refugados<span class="pull-right">25%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-danger wow animated progress-animated" style="width: 25%; height:6px;" role="progressbar"> <span class="sr-only">60% Complete</span> </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<link rel="stylesheet" href="{{ asset('plugins/morrisjs/morris.css') }}">

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('plugins/raphael/raphael-min.js')}} "></script>
<script src="{{ asset('plugins/morrisjs/morris.js')}} "></script>
<script src="{{ asset('js/morris-data.js') }}"></script>
    
@endsection