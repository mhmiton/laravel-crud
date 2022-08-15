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
        <a href="{{ route('student.index') }}" class="btn btn-danger">Back</a>
      </div>

      <div class="col-12 mt-3">
        <div class="h1">Add Student</div>

        <div class="mt-3">
          <form action="{{ isset($student) ? route('student.update', $student->id) : route('student.store') }}" method="POST">
            @csrf
            @isset($student) @method('PUT') @endisset

            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name', $student->name ?? null) }}" />
              @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
              <label for="student_id" class="form-label">ID</label>
              <input type="text" class="form-control @error('student_id') is-invalid @enderror" name="student_id" id="student_id" value="{{ old('student_id', $student->student_id ?? null) }}" />
              @error('student_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
              <label for="phone" class="form-label">Phone</label>
              <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone', $student->phone ?? null) }}" />
              @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
