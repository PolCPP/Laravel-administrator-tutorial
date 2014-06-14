<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
		<meta charset="utf-8">
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>@yield('title')</title> 
		<link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css'>
		<style>
			body {
				margin-top: 10px;
			}
		</style>
	</head>
	<body>
		<div class='container-fluid'>
			<div class='row'>
				@yield('content')
			</div>
		</div>
	</body>
</html>