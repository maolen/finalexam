@extends('layouts.front')

@section('content')

    <div class="mb-3 d-flex align-items-center justify-content-between">
        <h1 class="mb-0">{{ $title }}</h1>

    </div>
    @include('components.datepicker')

    @if($weights->isEmpty())

        <div class="alert alert-secondary">
            Не найдено
        </div>

    @else
        @include('components.datatable')
        @include('components.flash-message')

        @if($weights->hasPages())
            <div class="mt-3">
                {{ $weights->links() }}
            </div>
        @endif

    @endif

@endsection
