@extends('app')


@section('page_title', 'Indicadores - Qualidade')

<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- chartist CSS -->
  <link href="{{asset('plugins/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/chartist-js/dist/chartist-init.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
  <link href="{{asset('plugins/css-chart/css-chart.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/colors/blue.css')}}" id="theme" rel="stylesheet">

@section('breadcrumbs')

<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="javascript:void(0)">Indicadores - Qualidade</a></li>

@endsection



@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h1>Qualidade</h1>
            <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body"></br>
                                <ul class="list-inline pull-right">
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5" style="color:#8b0000"></i>Metros Refugados</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5 text-info"></i>Metros Bons</h6>
                                    </li>
                                </ul>
                                <h4 class="card-title">Produção diária em cada equipamento</h4>
                                <div class="clear"></div>
                                <div class="total-sales" style="height: 365px;"></div>
                            </div>
                        </div>
                    </div>

        </div>
    </div>
</div>


<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{asset('plugins/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset('plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('plugins/echarts/echarts-all.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dashboard4.js') }}"></script>
@endsection
