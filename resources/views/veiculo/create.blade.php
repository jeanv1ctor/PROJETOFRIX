@extends('templates.template')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br><br>
            <h1 class="text-center display-6">Cadastrar Veículo</h1>
            <div class="w-auto p-3">
                <form action="{{route('salvar_veiculo')}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="Número do veiculo">Número do veículo</label>
                    <input type="text" class="form-control" name="numero_veiculo" id="numero_veiculo" required>
                </div>
                <div class="form-group row">
                    <label for="Placa ">Placa do veículo</label>
                    <input type="text" class="form-control" name="placa" id="placa" required >
                </div>
                <div class="form-group row">
                    <label for="Descrição">Descrição</label>
                    <input type="text" class="form-control" name="descricao" id="descricao" required >
                </div>
                <div class="form-group row">
                    <label for="Marca">Marca</label>
                    <input type="text" class="form-control" name="marca" id="marca"  required >
                </div>
                <div class="form-group row">
                    <label for="Modelo">Modelo</label>
                    <input type="text" class="form-control" name="modelo" id="modelo" required >
                </div>
                <div class="form-group row">
                    <label for="Chassi">Chassi</label>
                    <input type="text" class="form-control" name="chassi" id="chassi"  required >
                </div>
                <div class="form-group row">
                    <label for="Renavan">Renavan</label>
                    <input type="text" class="form-control" name="renavan" id="renavan"  required>
                </div>
                <div class="form-group row">
                    <label for="Eixo">Eixo</label>
                    <input type="text" class="form-control" name="eixo" id="eixo"  required >
                </div>
                <div class="form-group row">
                    <label for="Autonomia">Autonomia</label>
                    <input type="text" class="form-control" name="autonomia" id="autonomia"  required >
                </div>
                <div class="form-group row">
                    <label for="Modelo">Ano Modelo</label>
                    <input type="text" class="form-control" name="ano" id="ano" required >
                </div>
                <div class="form-group row">
                    <label for="Fabricação">Ano de Fabricação</label>
                    <input type="text" class="form-control" name="fabricacao" id="fabricacao" required >
                </div>


                <br>
                <button type="submits" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


