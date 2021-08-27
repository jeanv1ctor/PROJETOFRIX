@extends('templates.template')

@section('content')

<div class="container h-100">
    <br><br>
    <h1 class="text-center display-6">Cadastrar Veículo</h1>
    <div class="w-auto p-3">
        <form action="{{route('salvar_caminhao')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="Número do Caminhao">Número do veículo</label>
            <input type="text" class="form-control" name="numero_caminhao" id="numero_caminhao" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="Placa ">Placa do veículo</label>
            <input type="text" class="form-control" name="numero_caminhao" id="placa" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Descrição</label>
            <input type="text" class="form-control" name="numero_caminhao" id="descricao" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Marca</label>
            <input type="text" class="form-control" name="numero_caminhao" id="marca" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Modelo</label>
            <input type="text" class="form-control" name="numero_caminhao" id="modelo" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Chassi</label>
            <input type="text" class="form-control" name="numero_caminhao" id="chassi" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Ano</label>
            <input type="text" class="form-control" name="numero_caminhao" id="ano" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Fabricação</label>
            <input type="text" class="form-control" name="numero_caminhao" id="fabricacao" aria-describedby="emailHelp">
        </div>


        <br>
        <button type="submits" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</div>
@endsection


