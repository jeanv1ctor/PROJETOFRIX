@extends('templates.template')

@section('content')

<div class="container h-100">
    <br><br>
    <h1 class="text-center display-6">Registrar Abastecimento</h1>
    <div class="w-auto p-3">
        <form action="{{route('salvar_abastecimento')}}" method="post">
        
        @csrf

        <div class="form-group">
            <label for="Número do veículo">Número do veículo</label>
            <input type="text" class="form-control" name="numero_caminhao" id="numero_caminhao" required aria-describedby="emailHelp">
        </div>
        
        <div class="form-group">
            <label for="Quantidade abastecida">Quantidade abastecida (em litros)</label>
            <input type="text" class="form-control" name="quantidade_diesel" id="quatidade_diesel" required aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="KM">KM do veículo</label>
            <input type="text" class="form-control" name="km" id="km" required aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="Carga">Carga</label>
            <input type="text" class="form-control" name="carga" id="carga"  aria-describedby="emailHelp">
        </div>

        <br>
        <button type="submits" class="btn btn-primary">Registrar</button>
        <a class="btn btn-success" href="{{route('lista_abastecimento')}}" role="buttons" style="float: right">Histórico</a>
        </form>
    </div>
</div>

@endsection
