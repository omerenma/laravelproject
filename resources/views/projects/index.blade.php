
@extends('layouts.app')
@section('content')

<div  style="float: right; margin-right: 300px">
<a class=" btn btn-primary pull-right" href="/projects/create">Create company</a>
</div> 
 <div class="card" style="width: 500px; margin-left: 400px; border:1px solid blue;">
  <div class="card-body" style="height: 10px; background-color: blue; color:white">
    <h5 class="card-title">My projects</h5>

  </div>




  <ul class="list-group list-group-flush">
  	@foreach($projects as $company)
    <li class="list-group-item " style="margin: 0 5px; border-width: 2px;"><a href="/projects/{{$company->id}}">{{ $company->name}}</a></li>
    @endforeach
  </ul>
 
</div>


@endsection