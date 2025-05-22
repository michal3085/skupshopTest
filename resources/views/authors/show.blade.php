@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        {{ __('Autor') }}
                        <a href="{{ route('authors.edit', $author) }}" class="btn btn-primary btn-sm">
                            Edytuj
                        </a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h1>{{ $author->name }}</h1>
                        <h3>{{ $author->slug }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
