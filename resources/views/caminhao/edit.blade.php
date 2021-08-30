@extends('templates.template')

@section('content')

<div class="container h-100">
    <br><br>
    <h1 class="text-center display-6">Cadastrar Veículo</h1>
    <div class="w-auto p-3">
        <form action="{{route('atualiza_caminhao', ['id' => $caminhao->id])}}" method="post">
        @csrf
        <div class="form-group">
            <label for="Número do Caminhao">Número do veículo</label>
            <input type="text" class="form-control" name="numero_caminhao" id="numero_caminhao" value="{{$caminhao->numero_caminhao}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="Placa ">Placa do veículo</label>
            <input type="text" class="form-control" name="placa" id="placa" value="{{$caminhao->placa}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao" value="{{$caminhao->descricao}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Marca</label>
            <input type="text" class="form-control" name="marca" id="marca" value="{{$caminhao->marca}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Modelo</label>
            <input type="text" class="form-control" name="modelo" id="modelo" value="{{$caminhao->modelo}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Chassi</label>
            <input type="text" class="form-control" name="chassi" id="chassi"  value="{{$caminhao->chassi}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Ano</label>
            <input type="text" class="form-control" name="ano" id="ano" value="{{$caminhao->ano}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Fabricação</label>
            <input type="text" class="form-control" name="fabricacao" id="fabricacao" value="{{$caminhao->fabricacao}}" aria-describedby="emailHelp">
        </div>


        <br>
        <button type="submits" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</div>
@endsection


