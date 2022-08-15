<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Laravel Crud</title>
  </head>
  <body>
    <div class="container mt-5">
      <div class="col-12">
        <a href="{{ route('home') }}" class="btn btn-success">Home</a>
        <a href="{{ route('student.create') }}" class="btn btn-primary">+ Add Student</a>
      </div>

      <div class="col-12">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>SL</th>
                <th>Name</th>
                <th>ID</th>
                <th>Phone</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($students as $student)
                <tr>
                  <td>{{ $student->id }}</td>
                  <td>{{ $student->name ?? 'N/A' }}</td>
                  <td>{{ $student->student_id ?? 'N/A' }}</td>
                  <td>{{ $student->phone ?? 'N/A' }}</td>
                  <td>
                    <div class="d-flex">
                      <a href="{{ route('student.edit', $student->id) }}" class="btn btn-primary me-3">Edit</a>
                      <form action="{{ route('student.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    </div>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
