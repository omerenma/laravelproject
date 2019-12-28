@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
  <div class="col-md-9 pull-left">
<form method="post" action="{{route('projects.store')}}">
  {{ csrf_field() }}
 
  <div class="form-group">
    <label for="company-name">Name<span class="required">*</span></label>
    <input type="text" 
    class="form-control"
    id="company-name"
    required
    name="name" 
    spellcheck="false" 
    placeholder="Enter name">

     <input type="hidden" name="_method" value="post"> 
     <input type="text" 
    class="form-control"
   
    name="company_id" 
    value="{{$company_id}}" 
    spellcheck="false" 
    placeholder="Enter project"
    >
   
  </div>

  <div class="form-group">
    <label for="company-content">Description<span class="required">*</span></label>
    <textarea type="text" 
    style="resize: vertical"
    class="form-control autosize-target text-left" 
    rows="5"
    spellcheck="false" 
    class="form-control"
    id="company-name"
    name="description" 
    spellcheck="false" 
    placeholder="Enter description">
     
    </textarea>
   
  </div>

  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<div class="col-md-3 pull-right" style="background-color: #fff">
     <!--  <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div> -->

 <div class="p-4">
        <h4 class="font-italic">Actions</h4>
        <ol class="list-unstyled">
          <li><a href="/projects">View projects</a></li>
      
          
        </ol>
      </div>
      <!-- <div class="p-4">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">March 2014</a></li>
          
        </ol>
      </div> -->

     
    </div>
  </div>
  </div> 
@endsection
