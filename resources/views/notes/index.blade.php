<!-- resources/views/notes/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Notes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>All Notes</h1>

    <!-- Check if there are any notes -->
    @if ($notes->isEmpty())
        <p>No notes available.</p>
    @else
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Text</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
            </thead>
            <tbody>
            <!-- Loop through each note -->
            @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->id }}</td>
                    <td>{{ $note->text }}</td>
                    <td>{{ $note->created_at }}</td>
                    <td>{{ $note->updated_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    <!-- Link back to create a new note -->
    <a href="{{ route('notes.create') }}" class="btn btn-primary">Add New Note</a>
</div>
</body>
</html>
