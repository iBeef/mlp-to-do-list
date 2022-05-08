<tr>
    <td>{{ $index }}</td>
    <td
        {{ $attributes->class(['completed' => $completed]) }}
    >{{ $description }}</td>
    <td>
        <form action="{{ url("/tasks/$id") }}" method="POST">
            <div class="form-group">
                @csrf
                @method('PUT')
                <button
                    class="btn btn-success"
                >
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                </input>
            </div>
        </form>
        <form action="{{ url("/tasks/$id") }}" method="POST">
            <div class="form-group">
                @csrf
                @method('DELETE')
                <button
                    class="btn btn-danger"
                >
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </input>
            </div>
        </form>
    </td>
</tr>