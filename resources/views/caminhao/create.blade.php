@extends('templates.template')

@section('content')

<div class="container h-100">
    <br><br>
    <h1 class="text-center display-6">Cadastrar Veículo</h1>
    <div class="w-auto p-3">
        <form action="{{route('salvar_caminhao')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputText">Número do caminhão</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div><br>
        <button type="submits" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</div>
@endsection


