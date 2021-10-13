@extends('templates.template')


@section('content')
<div class="container">
    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center display-6">Histórico de Abastecimento Externo</h1>
            <div class="w-auto p-3">

                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">Nº DO VEÍCULO</th>
                        <th scope="col">QUANTIDADE ABASTECIDA (LITROS)</th>
                        <th scope="col">TIPO DE COMBUSTIVEL</th>
                        <th scope="col">KM</th>
                        <th scope="col">CARGA</th>
                        <th scope="col">POSTO</th>
                        <th scope="col">NOTA</th>
                        <th scope="col">VALOR</th>
                        <th scope="col">DATA/HORÁRIO</th>
                        <th scope="col">MOTORISTA</th>
                        </tr>
                    </thead>
                    
                    @foreach($abastecimentoExt as $abastecimentoExt) 
                    <tbody>
                        <tr>
                        <th scope="row">{{$abastecimentoExt->numero_veiculo}}</th>
                        <th>{{$abastecimentoExt->quantidade_abastecida}}</th>
                        <th>{{$abastecimentoExt->tipo_combustivel}}</th>
                        <th>{{$abastecimentoExt->km}}</th>
                        <th>{{$abastecimentoExt->carga}}</th>
                        <th>{{$abastecimentoExt->nome_posto}}</th>
                        <th>{{$abastecimentoExt->num_nota}}</th>
                        <th>{{$abastecimentoExt->valor_nota}}</th>
                        <th>{{$abastecimentoExt->created_at->format('d/m/y H:i:s')}}</th>>
                        <th>{{$abastecimentoExt->motorista}}</th>>
                        </tr>
                    </tbody>
                    @endforeach
                    
                </table>
                <a class="btn btn-success" href="{{route('abasteceExt')}}" role="buttons" style="float: right">Voltar</a>
           </div>
        </div>   
    </div>        
</div>
@endsection