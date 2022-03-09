<form method="POST" action="{{ route($route, $id) }}">
    @csrf
    @method('delete')

    <button class="btn btn-danger" type="submit">Eliminate</button>

</form>