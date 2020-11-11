@extends('layouts.front')

@section('content')

    <h1 class="mb-3">{{ $title }}</h1>

    <div class="row">

        <div class="col-12 col-md-6">

            <form action="{{ route('weights.store') }}" method="post" class="card card-body">
                @csrf

                <div class="form-group">

                    <label for="weight">Введите ваш текущий вес</label>

                    <input class="form-control @error('weight') is-invalid @enderror "
                           value="{{ old('weight', $weight->title ?? null) }}"
                           type="number"
                           min="1"
                           max="300"
                           id="weight"
                           name="weight"
                           step="1"
                           placeholder="Введите вес...">

                    @error('weight')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror

                </div>

                <button class="btn btn-success">
                    Сохранить
                </button>

            </form>

        </div>

    </div>

    @include('components.flash-message')

@endsection
