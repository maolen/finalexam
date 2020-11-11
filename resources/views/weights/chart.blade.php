@extends('layouts.front')

@section('stat')
    {!! $chart->container() !!}

    <script src="{{ $chart->cdn() }}"></script>

    {{ $chart->script() }}
@endsection
