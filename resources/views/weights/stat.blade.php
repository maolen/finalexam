@extends('layouts.app')

@section('stat')
    <div class="py-12">
        <div id="chart" style="height: 300px;"></div>

        <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
        <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
        <script>
            const chart = new Chartisan({
                el: '#chart',
                url: "@chart('my_chart')",
                hooks: new ChartisanHooks()
                    .colors(['#4299E1','#FE0045','#C07EF1','#67C560','#ECC94B'])
                    .datasets('line')
                    .axis(true)
            });
        </script>
    </div>

@endsection
