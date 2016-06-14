@extends('/layouts/header')

@section('content')

<h1>{{ $routineName }}</h1>

<h3>Below you can add your exercises to your routine!</h3>

<form method="POST" action="routines">
	<label>Enter Exercise Name</label>
	<input type="text" name="exercise"></input>
	<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	<br><button type="submit">Submit</button>
</form>

{{--
@if (isset($exerciseName))
	@foreach($exerciseName as $exName)

		<h2>{{ $exName->name }}</h2>

	@endforeach

@else



<p>No Exercise Added</p>

@endif
--}}

@stop