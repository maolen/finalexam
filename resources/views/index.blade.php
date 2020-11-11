@extends('layouts.front')

@section('content')
    @guest
        <div class="text-center">
            <main role="main" class="inner cover">
                <h1 class="cover-heading">{{ $title }}</h1>
                <p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download,
                    edit the text, and add your own fullscreen background photo to make it your own.</p>
                <p class="lead">
                    <a href="{{ route('register') }}" class="btn btn-lg btn-secondary">Начать!</a>
                </p>
            </main>

            <footer class="mastfoot mt-auto">
                <div class="inner">
                    <p>Kamila 2020</p>
                </div>
            </footer>
        </div>
    @endguest

    @auth
        @include('weights.form')
    @endauth

@endsection
