@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h1 class="mb-0">
            {{ $title }}
        </h1>

        @can('create', 'App\Models\Weight')
            @include('weights.form')
        @endcan
    </div>
@endsection

@section('stat')

    @auth
        @include('weights.stat')
    @endauth

@endsection
