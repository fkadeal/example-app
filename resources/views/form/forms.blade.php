@extends('layout.app');

@section('content')
@if($errors->any())
<ul><div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li class="items">{{ $error }}</li>
        @endforeach
    </div>
</ul>
@endif
<form action="/postform" method="POST">
    @csrf
    <div class="form-group">
        <label class="form-check-label" for="exampleCheck1">User Name</label>
        <input type="text" name="uname" class="form-control" id="exampleCheck1">
      </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection