@extends('templates.template')

@section('content')

<div class="container h-100">
    <br><br>
    <h1 class="text-center ">Editar Veículo</h1>
    <div class="w-auto p-3">
        <form action="{{route('atualiza_veiculo', ['id'=>$veiculo->id])}}" method="post">
        @csrf
        <div class="form-group">
            <label for="Número do veiculo">Número do veículo</label>
            <input type="text" class="form-control" name="numero_veiculo" id="numero_veiculo" value="{{$veiculo->numero_veiculo}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="Placa ">Placa do veículo</label>
            <input type="text" class="form-control" name="placa" id="placa" value="{{$veiculo->placa}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Descrição</label>
            <input type="text" class="form-control" name="descricao" id="descricao" value="{{$veiculo->descricao}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Marca</label>
            <input type="text" class="form-control" name="marca" id="marca" value="{{$veiculo->marca}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Modelo</label>
            <input type="text" class="form-control" name="modelo" id="modelo" value="{{$veiculo->modelo}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Chassi</label>
            <input type="text" class="form-control" name="chassi" id="chassi"  value="{{$veiculo->chassi}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Eixo</label>
            <input type="text" class="form-control" name="eixo" id="eixo"  value="{{$veiculo->eixo}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Ano Modelo</label>
            <input type="text" class="form-control" name="ano" id="ano" value="{{$veiculo->ano}}" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Ano de Fabricação</label>
            <input type="text" class="form-control" name="fabricacao" id="fabricacao" value="{{$veiculo->fabricacao}}" aria-describedby="emailHelp">
        </div>


        <br>
        <button type="submits" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</div>
@endsection


