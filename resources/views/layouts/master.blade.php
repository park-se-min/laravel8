<!DOCTYPE html>
<html lang="kr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>라라벨8</title>
</head>
<body>
	@yield('start_script')

	@yield('content')

	@yield('script')
	@yield('end_script')

	{{-- @include('partials.footer') --}}
</body>
</html>