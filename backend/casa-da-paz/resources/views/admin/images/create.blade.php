@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Adicionar Nova Imagem</h1>

    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="type">Tipo da Imagem:</label>
            <div class="btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-outline-primary">
                    <input type="radio" name="type" value="home" autocomplete="off" required> Home
                </label>
                <label class="btn btn-outline-primary">
                    <input type="radio" name="type" value="galeria" autocomplete="off"> Galeria
                </label>
                <label class="btn btn-outline-primary">
                    <input type="radio" name="type" value="quem_somos" autocomplete="off"> Quem Somos
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="image">Imagem:</label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Adicionar Imagem</button>
    </form>
</div>
@endsection
