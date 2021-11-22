@extends('templates.template')


@section('content')

<div class="container h-100">
    <br><br>
    <h1 class="text-center display-6">Registrar KM de Saída do Veículo</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif

            <div class="w-auto p-3">

                <form action="{{route('salvar_abastecimento')}}" method="post">
                
                @csrf
                <div class="form-group row">
                    <label for="exampleDataList" class="form-label">Número do veículo</label>
                    <input class="form-control" list="datalistOptions"  name="numero_veiculo" id="numero_veiculo" required placeholder="Digite para pesquisar..." autocomplete="off">

            
                    <datalist id="datalistOptions">
                    @foreach($veiculo as $veiculo) 
                        <option value="{{$veiculo->numero_veiculo}}">
                    @endforeach
                    </datalist>
                </div>
                
                <div class="form-group row">
                    <label for="Quantidade abastecida">Quantidade abastecida (em litros)</label>
                    <input type="text" class="form-control" name="quantidade_abastecida" id="quatidade_abastecida" required aria-describedby="emailHelp">
                </div>

                <div class="form-group row">
                    <label for="Tipo de combustivel">Tipo de combustível</label>
                    <select class="form-select" aria-label="Default select example" name="tipo_combustivel" id="tipo_combustivel">
                        <option value="Diesel">Diesel S10</option>
                        <option value="Diesel S10">Diesel</option>
                        <option value="Alcool">Alcool</option>
                        <option value="Gasolina">Gasolina</option>
                    </select>
                </div> 

                <div class="form-group row">
                    <label for="KM">KM do veículo</label>
                    <input type="text" class="form-control" name="km" id="km" required aria-describedby="emailHelp">
                </div>
                <div class="form-group row">
                    <label for="Carga">Carga</label>
                    <input type="text" class="form-control" name="carga" id="carga"  aria-describedby="emailHelp">
                </div>
                <div class="form-group row">
                    <label for="Motorista">Nome do Motorista</label>
                    <input type="text" class="form-control" name="motorista" id="motorista"  aria-describedby="emailHelp">
                </div>
                <br>
                <button type="submits" class="btn btn-primary">Registrar</button>
                <a class="btn btn-success" href="{{route('lista_abastecimento')}}" role="buttons" style="float: right">Histórico</a>
                </form>
            </div>
         </div>
    </div>   
</div>

@endsection