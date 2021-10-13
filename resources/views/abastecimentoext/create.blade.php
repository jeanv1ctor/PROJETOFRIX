@extends('templates.template')


@section('content')

<div class="container h-100">
    <br><br>
    <h1 class="text-center display-6">Registrar Abastecimento Externo</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            @if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif

            <div class="w-auto p-3">

                <form action="{{route('salvar_abastecimentoExt')}}" method="post">
                
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
                    <input type="text" class="form-control" name="quantidade_abastecida" id="quatidade_abastecida" required >
                </div>

                <div class="form-group row">
                    <label for="Numero da nota">Numero da nota</label>
                    <input type="text" class="form-control" name="num_nota" id="num_nota"  required>
                </div>
                <div class="form-group row">
                    <label for="Valor">Valor da nota</label>
                    <input type="text" class="form-control" name="valor_nota" id="valor_nota"  required>
                </div>
                
                <div class="form-group row">
                    <label for="Nome do posto">Nome do posto</label>
                    <input type="text" class="form-control" name="nome_posto" id="nome_posto" >
                </div>

                <div class="form-group row">
                    <label for="Tipo de combustivel">Tipo de combustível</label>
                    <select class="form-select" aria-label="Default select example" name="tipo_combustivel" id="tipo_combustivel">
                        <option value="Diesel">Diesel</option>
                        <option value="Diesel S10">Diesel S10</option>
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
                <a class="btn btn-success" href="{{route('lista_abastecimentoExt')}}" role="buttons" style="float: right">Histórico</a>
                </form>
            </div>
         </div>
    </div>   
</div>

@endsection