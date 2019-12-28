@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
<div class="col-md-9 pull-left">
 <div class="jumbotron">
    <div class="container">
      <h2 class="display-3">{{$projects->name}}</h2>
      <p>{{$projects->description}}</p>
     <!--  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> -->
    </div>
  </div>

<br>
<div class="row container-fluid" style="background-color: #fff">
  <div class="col-md-9">
  <form method="post" action="{{route('comments.store')}}">
  {{ csrf_field() }}
   <input type="hidden" name="commentable_type" value="App\Project"> 
  <input type="hidden" name="commentable_id" value="{{$projects->id}}"> 

   <div class="form-group">
    <label for="comment-content">Body<span class="required">*</span></label>

     <textarea type="text" 
    style="resize: vertical"
    class="form-control autosize-target text-left" 
    rows="5"
    spellcheck="false" 
    class="form-control"
    id="comment-content"
    name="body" 
    spellcheck="false" 
    placeholder="Enter comment">
     
    </textarea>

  
   
  </div>









  <div class="form-group">
    <label for="comment-content">Url (proof of work done)<span class="required">*</span></label>

     <textarea type="text" 
    style="resize: vertical"
    class="form-control autosize-target text-left" 
    rows="2"
    spellcheck="false" 
    class="form-control"
    id="comment-content"
    name="url" 
    spellcheck="false" 
    placeholder="Enter url or screenshots">
     
    </textarea>

  
   
  </div>





  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>


  <div class="container">
    <div class="row" style="background-color: #fff; margin: 10px">
    	{{-- @foreach($projects->projects as $projects)
      <div class="col-md-4">
        <h2>{{$project->name}}</h2>
        <p> {{$project->description}}</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
      @endforeach --}}
    </div>
  </div> 

</div>

<div class="col-md-3 pull-right" style="background-color: #fff">
     <!--  <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div> -->

 <div class="p-4">
        <h4 class="font-italic">Actions</h4>
        <ol class="list-unstyled">
          <li><a href="/projects/{{$projects->id}}/edit">Edit</a></li>
          <li><a href="/projects/create">Add projects</a></li>
          <li><a href="/projects">View projects</a></li>
          <br>
          <li>
            <a href="#"
              onclick="Delete();">
              Delete
            </a>
       
              <form id="delete-form" action="{{ route('projects.destroy', [$projects->id])}}" method="post" style="display: none;">
                <input type="hidden" name="_method" value="delete">
                {{csrf_field() }}
                
              </form>
              
           </li>
          
         <!--  <li><a href="#">Add new Member</a></li> -->
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
  <script>
    function Delete(){
       var result = confirm("Are you sure you want to delete this company?");
              if( result ){
              event.preventDefault();
              document.getElementById('delete-form').submit();
            }

    }
   
  </script>
@endsection
