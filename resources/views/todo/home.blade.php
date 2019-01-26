@extends('layout.app')

@section('body')

	<br/>
	@if(session()->has('message'))
	<h1 class="alert alert-success">{{session()->get('message')}}</h1>
	@endif
	<a href="todo/create" class="btn btn-info"> Add New</a>
	<div class="col-lg-6 col-lg-offset-3">
		<center><h1>Todo List</h1></center>
		<ul class="list-group col-lg-8">
		@foreach($todos as $todo)
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <a href="{{'todo/'.$todo->id}}"> {{$todo->title}} </a>
		    <span class="pull-right">{{$todo->created_at->diffForHumans()}}</span>
		  </li>
		 @endforeach
		</ul>

		<ul class="list-group col-lg-4">
		@foreach($todos as $todo)
		  <li class="list-group-item d-flex justify-content-between align-items-center">
		    <a href="{{'todo/'.$todo->id.'/edit'}}"> Edit</a>
		    <form class="form-group pull-right" action="{{'todo/'.$todo->id}}" method="post">
		    	 {{ method_field('DELETE') }}
		    	 	{{csrf_field()}}
		    	<button type="submit">Delet
		    		
		    	</button>
		    </form>
		  </li>
		 @endforeach
		</ul>
	</div>

@endsection