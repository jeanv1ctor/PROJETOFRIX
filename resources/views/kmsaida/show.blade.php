@extends('templates.template')


@section('content')
<div class="container">
    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h1 class="text-center display-6">Histórico de saída de Veículos</h1>
            <div class="w-auto p-3">

                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                        <th scope="col">Nº DO VEÍCULO</th>
                        <th scope="col">KM DE SAIDA</th>
                        <th scope="col">CARGA</th>
                        <th scope="col">DATA/HORÁRIO</th>
                        <th scope="col">MOTORISTA</th>
                        </tr>
                    </thead>
                    
                    @foreach($kmsaida as $kmsaida) 
                    <tbody>
                        <tr>
                        <th scope="row">{{$kmsaida->numero_veiculo}}</th>
                        <th>{{$kmsaida->km_saida}}</th>
                        <th>{{$kmsaida->carga}}</th>
                        <th>{{$kmsaida->created_at->format('d/m/y H:i:s')}}</th>
                        <th>{{$kmsaida->motorista}}</th>
                        </tr>
                    </tbody>
                    @endforeach
                    
                </table>
                <a class="btn btn-success" href="{{route('km_saida')}}" role="buttons" style="float: right">Voltar</a>
           </div>
        </div>   
    </div>        
</div>
@endsection