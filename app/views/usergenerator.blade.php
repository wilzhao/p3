@extends('_master')

@section('head')
<title>User Generator</title>
<?php require app_path()."/logic/usergeneratorlogic.blade.php";?>
@stop

@section('title')
Random User Generator
@stop
@section('content')
<form method = "POST" action = "user-generator">
How many users would you like? <input type = "text" name = "numUsers">
<br> <input type = "submit">
</form>
<br> 
<?php
try{ 
	echo generate($_POST["numUsers"]);
} catch (Exception $e){}
?>
@stop