@extends('backend.master')
@section('content')
<div class="div"><a href="{{route('admin-create')}}" class="btn btn-info">create</a></div>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($mainpage as $singlemainpage)
    <tr>
      <th scope="row">{{$singlemainpage->id}}</th>
      <td>{{$singlemainpage->Email}}</td>
      <td>{{$singlemainpage->Password}}</td>
     
    </tr>
    
    @endforeach
  </tbody>
</table>
@endsection