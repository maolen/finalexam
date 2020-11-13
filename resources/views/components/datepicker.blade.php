<div class="container">
    <form action="{{ route('weights.get-dates', auth()->user()) }}" class="card card-body">
        <div class="form-group">

            <label for="date_from">Начало </label>
            <input type="date" id="date_from" name="date_from">

            <label for="date_from">Конец </label>
            <input type="date" id="date_to" name="date_to">


            <button class="btn btn-success">
                Найти
            </button>
        </div>

    </form>
</div>
