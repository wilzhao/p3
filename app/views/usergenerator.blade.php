@extends('_master')

@section('content')
<form method = "POST" action = "user-generator">
How many users would you like? <input type = "text" name = "numUsers">
<br> <input type = "submit">
</form> 
@stop