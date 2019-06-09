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
            
        <h4 class="card-title">Dicionário</h4>
        <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Descrição</th>                                                
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>101</td>
                            <td>Falta de Programação do Setor</td>                                                
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>Setup</td>                                                
                        </tr>
                        <tr>
                            <td>103</td>
                            <td>Aguardando por ponte rolante</td>                                                
                        </tr>
                        <tr>
                            <td>104</td>
                            <td>Manutenção preventiva</td>                                                
                        </tr>
                        <tr>
                            <td>105</td>
                            <td>Manutenção corretiva</td>                                                
                        </tr>
                        <tr>
                            <td>106</td>
                            <td>Treinamento/Reunião</td>                                                
                        </tr>
                        <tr>
                            <td>107</td>
                            <td>Falta de espaço</td>                                                
                        </tr>
                        <tr>
                            <td>108</td>
                            <td>Acabamento (colagem)</td>                                                
                        </tr>
                        <tr>
                            <td>109</td>
                            <td>Esperar sequência de carga</td>                                                
                        </tr>
                        <tr>
                            <td>110</td>
                            <td>Descarregar máquina/carrinho</td>                                                
                        </tr>
                        <tr>
                            <td>111</td>
                            <td>Peso/Base (colagem)</td>                                                
                        </tr>
                        <tr>
                            <td>112</td>
                            <td>Organizar setor (colagem)</td>                                                
                        </tr>
                        <tr>
                            <td>113</td>
                            <td>Aguardando próximo/anterior setor</td>                                                
                        </tr>
                        <tr>
                            <td>114</td>
                            <td>Conferência/Inspeção</td>                                                
                        </tr>
                        <tr>
                            <td>115</td>
                            <td>Operador (es) auxiliando outro setor</td>                                                
                        </tr>
                        <tr>
                            <td>116</td>
                            <td>Carregando/Descarregando caminhão</td>                                                
                        </tr>
                        <tr>
                            <td>117</td>
                            <td>Folga/Feriado</td>                                                
                        </tr>
                    </tbody>
                 </table>
        </div>
    </div>
</div>
    
@endsection