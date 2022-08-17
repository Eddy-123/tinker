@extends('template')

@section('content')
    <div class="card">
        <p class="card-header-title">Creation d'un film</p>
    </div>
    <div class="card-content">
        <div class="content">
            <form action="{{ route('films.store') }}" method="POST">
                @csrf
                <div class="field">
                    <label for="" class="label">Titre</label>
                    <div class="control">
                        <input class="input @error('title')
                            is-danger
                        @enderror" type="text" name="title" value="{{ old('title') }}"
                        placeholder="Titre du film">
                    </div>
                    @error('title')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label for="" class="label">Annee de diffusion</label>
                    <div class="control">
                        <input type="number" class="input" name="year" value="{{ old('year') }}"
                        min="1950" max="{{ date('Y') }}">
                    </div>
                    @error('year')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label for="" class="label">Description</label>
                    <div class="control">
                        <textarea name="description" class="textarea" id="" placeholder="Description du film">
                            {{ old('description') }}
                        </textarea>
                    </div>
                    @error('description')
                        <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <div class="control">
                        <button class="button is-link">Envoyer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection