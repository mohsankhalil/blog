<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Update Student Form</h2>
  <form action="{{ route('update_student', $student->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="{{$student->name}}" required>
    </div>
   <div class="mb-3 mt-3">
      <label for="father_name">Father Name:</label>
      <input type="text" class="form-control" id="father_name" placeholder="Enter Father Name" name="father_name" value="{{ $student->father_name }}" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ $student->email }}" required>
    </div>
    <div class="mb-3 mt-3">
      <label for="phone">Phone:</label>
      <input type="number" class="form-control" id="phone" placeholder="Enter phone number" name="phone" value="{{$student->phone}}" required>
    </div>
    <div class="mb-3">
      <label for="class">class:</label>
      <input type="text" class="form-control" id="class" placeholder="Enter a Class" name="class" value="{{$student->class }}" required>
    </div>
    <div class="mb-3">
        <label for="message">Message:</label>
        <input type="text" class="form-control" id="message" placeholder="Enter a message" name="message" value="{{$student->message}}" required>
      </div>
    </div>
    <div>
    <button type="submit" class="btn btn-primary">Update</button> </div>
  </form>
</div>
</body>
</html>
