@extends('main')
@section('title', '| Create')

@section('content')
<div class="text-center">
<h1>Fill the following details</h1>	
</div>
<div class="col-md-6 col-md-offset-3">
	
<form action="{{ route('bonafide.store') }}" method="POST">
	{{ csrf_field() }}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>
  <div class="form-group">
    <label for="rollno">Roll Number</label>
    <input type="text" class="form-control" name="rollno" id="rollno">
  </div>
  <div class="form-group">
    <label for="cursem">Current Semester</label>
    <input type="text" class="form-control" name="cursem" id="cursem">
  </div>
  <div class="form-group">
    <label for="hostel">Hostel</label>
    <input type="text" class="form-control" name="hostel" id="hostel">
  </div>
  <div class="form-group">
    <label for="roomno">Room Number</label>
    <input type="text" class="form-control" name="roomno" id="roomno">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
 <div class="form-group">
    <label for="reason">Applying for: </label>
    &nbsp;
    <select name="reason" id="reason">
        <option value="bonafide">Bonafide</option>
        <option value="passport">Passport</option>
    </select>
</div>
<div class="text-center">
  <button type="submit" class="btn btn-success">Submit</button>	
</div>
</form>
</div>

@endsection