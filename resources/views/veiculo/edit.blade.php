@extends('templates.template')

@section('content')

<div class="container">
    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center ">Editar Veículo</h1>
            <div class="w-auto p-3">
                <form action="{{route('atualiza_veiculo', ['id'=>$veiculo->id])}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="Número do veiculo">Número do veículo</label>
                    <input type="text" class="form-control" name="numero_veiculo" id="numero_veiculo" value="{{$veiculo->numero_veiculo}}">
                </div>
                <div class="form-group row">
                    <label for="Placa ">Placa do veículo</label>
                    <input type="text" class="form-control" name="placa" id="placa" value="{{$veiculo->placa}}" >
                </div>
                <div class="form-group row">
                    <label for="Descricao">Descrição</label>
                    <input type="text" class="form-control" name="descricao" id="descricao" value="{{$veiculo->descricao}}" >
                </div>
                <div class="form-group row">
                    <label for="Marca">Marca</label>
                    <input type="text" class="form-control" name="marca" id="marca" value="{{$veiculo->marca}}" >
                </div>
                <div class="form-group row">
                    <label for="Modelo">Modelo</label>
                    <input type="text" class="form-control" name="modelo" id="modelo" value="{{$veiculo->modelo}}" >
                </div>
                <div class="form-group row">
                    <label for="Chassi">Chassi</label>
                    <input type="text" class="form-control" name="chassi" id="chassi"  value="{{$veiculo->chassi}}" >
                </div>
                <div class="form-group row">
                    <label for="Renavan">Renavan</label>
                    <input type="text" class="form-control" name="renavan" id="renavan"  value="{{$veiculo->renavan}}" >
                </div>
                <div class="form-group row">
                    <label for="Eixo">Eixo</label>
                    <input type="text" class="form-control" name="eixo" id="eixo"  value="{{$veiculo->eixo}}" >
                </div>
                <div class="form-group row">
                    <label for="Autonomia">Autonomia</label>
                    <input type="text" class="form-control" name="autonomia" id="autonomia"  required >
                </div>
                <div class="form-group row">
                    <label for="Modelo">Ano Modelo</label>
                    <input type="text" class="form-control" name="ano" id="ano" value="{{$veiculo->ano}}" >
                </div>
                <div class="form-group row">
                    <label for="Fabricacao">Ano de Fabricação</label>
                    <input type="text" class="form-control" name="fabricacao" id="fabricacao" value="{{$veiculo->fabricacao}}">
                </div>


                <br>
                <button type="submits" class="btn btn-primary">Atualizar</button>
                </form>
            </div>
        </div>     
   </div>    
</div>
@endsection