<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>phonebook</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div id="app">
		<Myheader></Myheader>
		<div class="container">
			<router-view></router-view>
			
		</div>
		<Myfooter></Myfooter>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>