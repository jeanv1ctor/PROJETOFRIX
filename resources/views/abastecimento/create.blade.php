@extends('templates.template')

@section('content')

<div class="container h-100">
    <br><br>
    <h1 class="text-center display-6">Registrar Abastecimento</h1>
    <div class="w-auto p-3">
        <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="Número do Caminhao">Caminhão</label>
            <input type="text" class="form-control" name="numero_caminhao" id="numero_caminhao" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="Placa ">Quantidade abastecida (em litros)</label>
            <input type="text" class="form-control" name="placa" id="placa" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputText">Kilometragem do caminhão</label>
            <input type="text" class="form-control" name="descricao" id="descricao" aria-describedby="emailHelp">
        </div>

        <br>
        <button type="submits" class="btn btn-primary">Registrar</button>
        </form>
    </div>
</div>
@endsection
