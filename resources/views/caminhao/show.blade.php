@extends('templates.template')

@section('content')

<div class="container h-100">
    <br><br>
    <h1 class="text-center display-6">Lista de Veículos</h1>
    <div class="w-auto p-3">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Nº CAMINHÃO</th>
                <th scope="col">PLACA</th>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">MARCA</th>
                <th scope="col">MODELO</th>
                <th scope="col">CHASSI</th>
                <th scope="col">ANO</th>
                <th scope="col">FABRICAÇÃO</th>
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
                <td><a class="btn btn-success" href="{{route('editar_caminhao', ['id'=>$caminhao->id])}}" role="buttons">Editar</a></td>
                <td><a class="btn btn-danger" href="{{route('exclui_caminhao', ['id'=>$caminhao->id])}}" role="buttons">Excluir</a></td>
                </tr>
            </tbody>

            @endforeach
        </table>
    </div>
</div>
@endsection