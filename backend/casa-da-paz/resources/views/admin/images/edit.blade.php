@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Editar Imagem</h1>

    <form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="type">Tipo da Imagem:</label>
            <div class="btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-outline-primary {{ $image->type == 'home' ? 'active' : '' }}">
                    <input type="radio" name="type" value="home" autocomplete="off" {{ $image->type == 'home' ? 'checked' : '' }} required> Home
                </label>
                <label class="btn btn-outline-primary {{ $image->type == 'galeria' ? 'active' : '' }}">
                    <input type="radio" name="type" value="galeria" autocomplete="off" {{ $image->type == 'galeria' ? 'checked' : '' }}> Galeria
                </label>
                <label class="btn btn-outline-primary {{ $image->type == 'quem_somos' ? 'active' : '' }}">
                    <input type="radio" name="type" value="quem_somos" autocomplete="off" {{ $image->type == 'quem_somos' ? 'checked' : '' }}> Quem Somos
                </label>
            </div>
        </div>

        <div class="form-group">
            <label for="image">Nova Imagem (deixe em branco se não quiser mudar):</label>
            <input type="file" name="image" id="image" class="form-control">
        </div>

        <button type="submit" class="btn btn-success mt-3">Atualizar Imagem</button>
    </form>
</div>
@endsection
