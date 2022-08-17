@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                Titre: {{ $film->title }}
            </p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Annee de sortie: {{ $film->year }}</p>
                <p>Categories:</p>
                <ul>
                    @foreach ($film->categories as $category)
                        <li>{{ $category->name }}</li>
                    @endforeach
                </ul>
                <hr>
                <p>{{ $film->description }}</p>
            </div>
        </div>
    </div>
@endsection