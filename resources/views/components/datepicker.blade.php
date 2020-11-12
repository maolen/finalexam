{{--<div class="container">--}}
{{--    <input type="text" name="daterange" id="daterange" placeholder="Выберите даты"/>--}}
{{--</div>--}}


{{--<script>--}}
{{--    $(function () {--}}
{{--        $('input[name="daterange"]').daterangepicker({--}}
{{--            opens: 'left'--}}
{{--        }, function (start, end) {--}}
{{--            console.log(start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));--}}
{{--        });--}}
{{--    });--}}

{{--</script>--}}

<div class="container">
    <form action="{{ route('weights.get-dates') }}" class="card card-body">
        <div class="form-group">

            <label for="date_from">Начало </label>
            <input type="date" id="date_from" name="date_from">

            <label for="date_from">Конец</label>
            <input type="date" id="date_to" name="date_to">


            <button class="btn btn-success">
                Найти
            </button>
        </div>

    </form>
</div>
