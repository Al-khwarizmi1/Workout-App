@extends('/layouts/header')

@section('content')

<h1>Home</h1>

<form method="post" action="routines">
    <p>Enter the name of your new workout routine!</p>
    <input type="text" name="name"></input>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <button type="submit">Submit</button>
</form>

@stop