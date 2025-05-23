@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Panel użytkownika</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Jesteś zalogowany!

                        <hr>

                        <p><strong>Twoje role:</strong></p>
                        <ul>
                            @foreach (Auth::user()->getRoleLabels() as $label)
                                <li>{{ $label }}</li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
