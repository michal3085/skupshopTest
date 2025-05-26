@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edycja autora') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('authors.update', $author) }}">
                            @csrf
                            @method('put')

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Imię i nazwisko') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror"
                                           name="name"
                                           value="{{ old('name') ?? $author->name }}"
                                           required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="birth_date" class="col-md-4 col-form-label text-md-end">{{ __('Data urodzenia') }}</label>
                                <div class="col-md-6">
                                    <input id="birth_date" type="date"
                                           class="form-control @error('birth_date') is-invalid @enderror"
                                           name="birth_date"
                                           value="{{ old('birth_date') ?? $author->birth_date->format('Y-m-d') }}"
                                           required>
                                    @error('birth_date')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="dead_date" class="col-md-4 col-form-label text-md-end">{{ __('Data śmierci') }}</label>
                                <div class="col-md-6">
                                    <input id="dead_date" type="date"
                                           class="form-control @error('dead_date') is-invalid @enderror"
                                           name="dead_date"
                                           value="{{ old('dead_date') ?? $author->dead_date->format('Y-m-d') }}">
                                    @error('dead_date')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Zapisz') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
