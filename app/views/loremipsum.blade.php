@extends('_master')

@section('head')
<title> Lorem Ipsum Generator</title>
<?php require app_path()."/logic/loremipsumlogic.blade.php";?>
@stop

@section('content')
<form method = "POST" action = "lorem-ipsum">
How many paragraphs would you like? <input type = "text" name = "numParagraphs">
<br> <input type = "submit">
</form> 
<?php
try{ 
	echo generate($_POST["numParagraphs"]);
} catch (Exception $e){}
?>
@stop