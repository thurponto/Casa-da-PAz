@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4 mb-4">Administração de Imagens</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="galeria-tab" data-toggle="tab" href="#galeria" role="tab" aria-controls="galeria" aria-selected="false">Galeria</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="quem-somos-tab" data-toggle="tab" href="#quem-somos" role="tab" aria-controls="quem-somos" aria-selected="false">Quem Somos</a>
        </li>
    </ul>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="mt-4 mb-3">
                <a href="{{ route('images.create') }}" class="btn btn-success">Adicionar Nova Imagem</a>
            </div>
            <h2>Imagens Home</h2>
            <div class="row mb-4">
                @foreach ($imagesByType['home'] ?? [] as $image)
                    <div class="col-md-3 mb-3">
                        <div class="card shadow-sm">
                            <img src="{{ asset('storage/' . $image->path) }}" class="card-img-top" alt="{{ $image->type }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $image->type }}</h5>
                                <a href="{{ route('images.edit', $image->id) }}" class="btn btn-info">Editar</a>
                                <form action="{{ route('images.destroy', $image->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta imagem?')">Excluir</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="tab-pane fade" id="galeria" role="tabpanel" aria-labelledby="galeria-tab">
            <div class="mt-4 mb-3">
                <a href="{{ route('images.create') }}" class="btn btn-success">Adicionar Nova Imagem</a>
            </div>
            <h2>Imagens Galeria</h2>
            <div class="row mb-4">
                @foreach ($imagesByType['galeria'] ?? [] as $image)
                    <div class="col-md-3 mb-3">
                        <div class="card shadow-sm">
                            <img src="{{ asset('storage/' . $image->path) }}" class="card-img-top" alt="{{ $image->type }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $image->type }}</h5>
                                <a href="{{ route('images.edit', $image->id) }}" class="btn btn-info">Editar</a>
                                <form action="{{ route('images.destroy', $image->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta imagem?')">Excluir</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="tab-pane fade" id="quem-somos" role="tabpanel" aria-labelledby="quem-somos-tab">
            <div class="mt-4 mb-3">
                <a href="{{ route('images.create') }}" class="btn btn-success">Adicionar Nova Imagem</a>
            </div>
            <h2>Imagens Quem Somos</h2>
            <div class="row mb-4">
                @foreach ($imagesByType['quem_somos'] ?? [] as $image)
                    <div class="col-md-3 mb-3">
                        <div class="card shadow-sm">
                            <img src="{{ asset('storage/' . $image->path) }}" class="card-img-top" alt="{{ $image->type }}">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $image->type }}</h5>
                                <a href="{{ route('images.edit', $image->id) }}" class="btn btn-info">Editar</a>
                                <form action="{{ route('images.destroy', $image->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir esta imagem?')">Excluir</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
