<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	{{HTML::style('stylesheets/style.css');}}
	<title>@yield('title')</title>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
	
@yield('head')
</head>
<body>
	<div id = "maincontainer">
		<div id = "titlebar">
			<h1>
			@yield('title')
			</h1>
		</div>
		<div id = "sidebar">
			<a href = "/">Home</a><br>
			<a href = "/lorem-ipsum">Lorem Ipsum Generator</a><br>
			<a href = "/user-generator">Random User Generator</a><br>
		</div>
		<div id = "content">

@yield('content')
		</div>
	</div>
</body>
</html>