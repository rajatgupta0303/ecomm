<!DOCTYPE html>
<html>
<head>
	<title>E-commerce Project</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	{{View::make('header')}}
	@yield('content')
	{{View::make('footer')}}
</body>
<script>
	// $(document).ready(function(){
	// 	$("button").click(function(){
	// 		alert("okkk");
	// })
	

	// })
</script>
<style>
	.custom-login
	{
		padding-top: 100px;
		height: 500px;
	}
	.form-control
	{
		width: 200%;
	}
</style>
</html>