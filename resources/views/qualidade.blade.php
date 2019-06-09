@extends('app')


@section('page_title', 'Indicadores - Qualidade')


    <!-- chartist CSS -->
  <link href="{{ asset('plugins/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
  <link href="{{ asset('plugins/chartist-js/dist/chartist-init.css')}}" rel="stylesheet">
  <link href="{{ asset('plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
  <link href="{{ asset('plugins/css-chart/css-chart.css')}}" rel="stylesheet">

@section('breadcrumbs')

<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
<li class="breadcrumb-item"><a href="javascript:void(0)">Indicadores - Qualidade</a></li>

@endsection



@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-body">

            <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body"></br>
                                <ul class="list-inline pull-right">
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5" style="color:red"></i>Metros Refugados</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted"><i class="fa fa-circle m-r-5" style="color:#f05b4f"></i>Metros Refugados</h6>
                                    </li>
                                </ul>
                                <h4 class="card-title">Produção diária / equipamento</h4>
                                <div class="clear"></div>
                                <div class="total-sales" style="height: 365px;"></div>
                            </div>
                        </div>
                    </div>

        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Ranking de maquina com maior refugo</h4>
                <table class="table browser m-t-30 no-border">
                    <tbody>
                        <tr>
                            <td>CAN8042</td>
                            <td class="text-right"><span class="label label-light-danger">10%</span></td>
                        </tr>
                        <tr>
                            <td>CAN3081</td>
                            <td class="text-right"><span class="label label-light-warning">5%</span></td>
                        </tr>
                        <tr>
                            <td>PE10</td>
                            <td class="text-right"><span class="label label-light-warning">5%</span></td>
                        </tr>
                        <tr>
                            <td>SCS6033</td>
                            <td class="text-right"><span class="label label-light-info">3%</span></td>
                        </tr>
                        <tr>
                            <td>DG01</td>
                            <td class="text-right"><span class="label label-light-info">3%</span></td>
                        </tr>
                        <tr>
                            <td>PE20</td>
                            <td class="text-right"><span class="label label-light-info">3%</span></td>
                        </tr>
                        <tr>
                            <td>CAN1081</td>
                            <td class="text-right"><span class="label label-light-info">3%</span></td>
                        </tr>
                        <tr>
                            <td>JK20</td>
                            <td class="text-right"><span class="label label-light-info">2%</span></td>
                        </tr>
                        <tr>
                            <td>SCS1104</td>
                            <td class="text-right"><span class="label label-light-info">2%</span></td>
                        </tr>
                        <tr>
                            <td>SCS5104</td>
                            <td class="text-right"><span class="label label-light-info">1%</span></td>
                        </tr>
                        <tr>
                            <td>SCS5052</td>
                            <td class="text-right"><span class="label label-light-info">1%</span></td>
                        </tr>
                        <tr>
                            <td>JK10</td>
                            <td class="text-right"><span class="label label-light-info">1%</span></td>
                        </tr>
                    </tbody>
                </table>
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
