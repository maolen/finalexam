<div class="card card-body">

    <table class="table table-hover">

        <thead>
        <tr>
            <th width="20%">Дата</th>

            <th width="20%">Вес (кг)</th>

            <th width="20%"></th>
        </tr>
        </thead>

        <tbody>

        @foreach($weights as $weight)
            <tr>
                <td>{{ Date::parse($weight->created_at, config('app.timezone'))->format('j F Y г. H:i:s') }}</td>
                <td>{{ $weight->weight }}</td>
                <td>
                    <form method="post" action="{{ route('weights.destroy', $weight) }}">
                        @csrf @method('delete')

                        <button class="btn btn-danger">
                            Удалить
                        </button>


                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>

</div>
