@extends('app')


@section('page_title', 'Indicadores - Performance')



@section('breadcrumbs')

<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>  
<li class="breadcrumb-item"><a href="javascript:void(0)">Indicadores - Performance</a></li> 

@endsection



@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-body">
            
            <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Performance (%)</h4>
                                <div id="morris-bar-chart2"></div>
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
<script src="{{ asset('js/morris-performance.js') }}"></script>
@endsection

