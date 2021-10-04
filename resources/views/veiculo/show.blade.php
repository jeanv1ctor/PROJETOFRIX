@extends('templates.template')

@section('content')

<div class="container">
    <br><br>
    <h1 class="text-center">Lista de Veículos</h1>
    <div class="w-auto p-3">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                <th scope="col">Nº DO VEÍCULO</th>
                <th scope="col">PLACA</th>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">MARCA</th>
                <th scope="col">MODELO</th>
                <th scope="col">CHASSI</th>
                <th scope="col">EIXO</th>
                <th scope="col">ANO/MODELO</th>
                <th scope="col">ANO/FABRICAÇÃO</th>
                </tr>
            </thead>
            
            @foreach($veiculo as $veiculo) 
            <tbody>
                <tr>
                <th scope="row">{{$veiculo->numero_veiculo}}</th>
                <td>{{$veiculo->placa}}</td>
                <td>{{$veiculo->descricao}}</td>
                <td>{{$veiculo->marca}}</td>
                <td>{{$veiculo->modelo}}</td>
                <td>{{$veiculo->chassi}}</td>
                <td>{{$veiculo->eixo}}</td>
                <td>{{$veiculo->ano}}</td>
                <td>{{$veiculo->fabricacao}}</td>
                <td><a class="btn btn-success" href="{{route('editar_veiculo', ['id'=>$veiculo->id])}}" role="buttons">Editar</a></td>
                <td><a class="btn btn-danger" href="{{route('exclui_veiculo', ['id'=>$veiculo->id])}}" role="buttons">Excluir</a></td>
                </tr>
            </tbody>
            @endforeach

        </table>
    </div>
</div>
@endsection