<div>
    <table class="table table-striped">
        <thead class="table table-striped bg-info">
            <tr>
                <th>ID</th>
                <th>Motor Name</th>
                <th>Model</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($motor as $mtor)
                <tr>
                    <td>{{ $mtor->id }}</td>
                    <td>{{ $mtor->name }}</td>
                    <td>{{ $mtor->model }}</td>
                    <td>{{ $mtor->price }}</td>
                    <td>
                        <a href="{{ url('edit', ['mtor' => $mtor->id]) }}" class="btn btn-secondary">Edit</a>
                    </td>
                    <td>
                        <a href="{{ url('delete', ['mtor' => $mtor->id]) }}" class="btn btn-danger">Delete</i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

