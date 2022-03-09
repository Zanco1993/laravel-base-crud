<form method="POST" action="{{ route($route, $id) }}" id="delete_form_{{ $id }}">
    @csrf
    @method('delete')

    <button class="btn btn-danger" type="submit">Eliminate</button>

</form>

<script>
    const num_{{ $id }}= document.getElementById('delete_form_{{ $id }}');
    num_{{ $id }}.addEventListener('click', function(e) {
        e.preventDefault();

        if(confirm("Confermi la cancellazione?")) {
            num_{{ $id }}.submit();
        }
    })
</script>