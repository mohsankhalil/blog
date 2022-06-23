<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Student Form</h2>
  <form action="{{ route('student-form') }}" method="POST">
    @csrf
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
    </div>
   <div class="mb-3 mt-3">
      <label for="father_name">Father Name:</label>
      <input type="text" class="form-control" id="father_name" placeholder="Enter Father Name" name="father_name" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="phone">Phone:</label>
      <input type="number" class="form-control" id="phone" placeholder="Enter phone number" name="phone" required>
    </div>
    <div class="mb-3">
      <label for="class">class:</label>
      <input type="text" class="form-control" id="class" placeholder="Enter a Class" name="class"required>
    </div>
    <div class="mb-3">
        <label for="message">Message:</label>
        <input type="text" class="form-control" id="message" placeholder="Enter a message" name="message"required>
      </div>
    </div>
    <div>
    <button type="submit" class="btn btn-primary">Submit</button> </div>
  </form>
</div>



<h1> SHOW STUDENTS  DATA</h1>
<table class="table table-bordered">
    <tr>
<td>SR</td>
<td>Name</td>
<td>FathernName</td>
<td>Email</td>
<td>Phone</td>
<td>Class</td>
<td>Message</td>
<td>Action</td>
    </tr>
    @php
        $count = 0;
    @endphp
@foreach ($student as $item)
<tr>
    <td>{{ $count++; }}</td>
    <td>{{ $item->name }}</td>
    <td>{{ $item->father_name }}</td>
    <td>{{ $item->email }}</td>
    <td>{{ $item->phone }}</td>
    <td>{{ $item->class }}</td>
    <td>{{ $item->message }}</td>

    <td>

            <form action="{{route('destroy',  $item->id)}}" method="POST">
                <a class="btn btn-primary" href="{{ route('edit', $item->id) }}">Edit</a>


          @csrf
          @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>

            {{-- <button type="submit" class="btn btn-success" href="{{ route('edit', $item->id) }}>Edit</button> --}}
        </form>
    </td>
</tr>

@endforeach



</table>

</body>
</html>
