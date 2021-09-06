@extends('templates.template')


@section('content')
<div class="container h-100">
    <br><br>
    <h1 class="text-center display-6">Histórico de Abastecimento</h1>
    <div class="w-auto p-3">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nº CAMINHÃO</th>
                <th scope="col">QUANTIDADE ABASTECIDA (LITROS)</th>
                <th scope="col">KM</th>
                <th scope="col">CARGA</th>
                <th scope="col">DATA/HORÁRIO</th>
                </tr>
            </thead>
            
            @foreach($abastecimento as $abastecimento) 
            <tbody>
                <tr>
                <th scope="row">{{$abastecimento->numero_caminhao}}</th>
                <th>{{$abastecimento->quantidade_diesel}}</th>
                <th>{{$abastecimento->km}}</th>
                <th>{{$abastecimento->carga}}</th>
                <th>{{$abastecimento->created_at->format('d/m/y H:i:s')}}</th>
                </tr>
            </tbody>
            @endforeach
            
        </table>
        <a class="btn btn-success" href="{{route('abastece')}}" role="buttons" style="float: right">Voltar</a>
    </div>
</div>
@endsection