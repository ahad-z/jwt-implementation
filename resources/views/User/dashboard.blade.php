@extends('User.index')
@section('content')
<div class="alert alert-success">
	<p class="text-center"><span style="font-style: italic;">You are Logged As <span style="font-weight: bold;">{{ auth()->user()->name}}</span></span></p>
	<p class="text-center"><span style="font-style: italic;">You are Logged As <span style="font-weight: bold;">{{ auth()->user()->email}}</span></span></p>
</div>
@endsection
