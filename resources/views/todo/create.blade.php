@extends('layout.app')


@section('body')
<br>
<a href="/BitfumesWebnologies/todo" class="btn btn-info">Back</a>
<div class="col-lg-4 col-lg-offset-4">
	<h1>Create New Item</h1>
<form class="form-horizontal" action="/BitfumesWebnologies/todo" method="post">
	{{csrf_field()}}
  <fieldset>
 
    <div class="form-group">
  
      <div class="col-lg-10">
        <input type="text" class="form-control" name="title" placeholder="Title">
        <br/>
      </div>

      <div class="col-lg-10">
        <textarea class="form-control" name="body" rows="5" id="textArea" placeholder="Body"></textarea>
      </div>

      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
	@include('todo.partials.error');
	</div>


@endsection