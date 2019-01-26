@extends('layout.app')

@section('body')
<center><a href="/BitfumesWebnologies/todo">Back</a></center>
	<br/>
	<center><h1>{{$item->title}}</h1></center>
	<center><p>{{$item->body}}</p></center>

@endsection