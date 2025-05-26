@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Atrybuty') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-sm table-responsive">
                            <thead>
                            <tr>
                                <th>#.</th>
                                <th>Width</th>
                                <th>Height</th>
                                <th>Weight</th>
                                <th>Pages</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($attributes as $attribute)
                                <tr>
                                    <td>
                                        <a href="{{ route('attributes.edit', $attribute) }}">
                                            {{ $loop->iteration }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ $attribute->width }}
                                    </td>
                                    <td>
                                        {{ $attribute->height }}
                                    </td>
                                    <td>
                                        {{ $attribute->weight }}
                                    </td>
                                    <td>
                                        {{ $attribute->pages }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
