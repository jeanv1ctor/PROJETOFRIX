@extends('templates.template')


@section('content')
<div class="container">
    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center display-6">Histórico de Abastecimento</h1>
            <div class="w-auto p-3">

                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">Nº DO VEÍCULO</th>
                        <th scope="col">QUANTIDADE ABASTECIDA (LITROS)</th>
                        <th scope="col">TIPO DE COMBUSTIVEL</th>
                        <th scope="col">KM</th>
                        <th scope="col">CARGA</th>
                        <th scope="col">DATA/HORÁRIO</th>
                        <th scope="col">MOTORISTA</th>
                        </tr>
                    </thead>
                    
                    @foreach($abastecimento as $abastecimento) 
                    <tbody>
                        <tr>
                        <th scope="row">{{$abastecimento->numero_veiculo}}</th>
                        <th>{{$abastecimento->quantidade_abastecida}}</th>
                        <th>{{$abastecimento->tipo_combustivel}}</th>
                        <th>{{$abastecimento->km}}</th>
                        <th>{{$abastecimento->carga}}</th>
                        <th>{{$abastecimento->created_at->format('d/m/y H:i:s')}}</th>
                        <th>{{$abastecimento->motorista}}</th>
                        </tr>
                    </tbody>
                    @endforeach
                    
                </table>
                <a class="btn btn-success" href="{{route('abastece')}}" role="buttons" style="float: right">Voltar</a>
           </div>
        </div>   
    </div>        
</div>
@endsection