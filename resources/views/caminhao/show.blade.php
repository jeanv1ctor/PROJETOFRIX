@extends('templates.template')

@section('content')

<div class="container h-100">
    <br><br>
    <h1 class="text-center display-6">Lista de Veículos</h1>
    <div class="w-auto p-3">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nº Caminhão</th>
                <th scope="col">Placa</th>
                <th scope="col">Descrição</th>
                <th scope="col">Marca</th>
                <th scope="col">Modelo</th>
                <th scope="col">Chassi</th>
                <th scope="col">Ano</th>
                <th scope="col">Fabricação</th>
                </tr>
            </thead>
            
            @foreach($caminhao as $caminhao) 
            <tbody>
                <tr>
                <th scope="row">{{$caminhao->numero_caminhao}}</th>
                <td>{{$caminhao->placa}}</td>
                <td>{{$caminhao->descricao}}</td>
                <td>{{$caminhao->marca}}</td>
                <td>{{$caminhao->modelo}}</td>
                <td>{{$caminhao->chassi}}</td>
                <td>{{$caminhao->ano}}</td>
                <td>{{$caminhao->fabricacao}}</td>
                <td><button type="button" class="btn btn-success"><a href="{{route('editar_caminhao', ['id'=>$caminhao->id])}}">Editar</a></button></td>
                <td><button type="button" class="btn btn-danger"><a href="{{route('exclui_caminhao', ['id'=>$caminhao->id])}}">Excluir</a></button></td>
                </tr>
            </tbody>

            @endforeach
        </table>
    </div>
</div>
@endsection