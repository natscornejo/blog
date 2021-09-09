<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Name</title>
</head>
<body>

	<h1>Our team</h1>

	<h3>Name: {{ $nombre }}</h3>
	<h4>Color fav: {{ $colorfav }}</h4>
	<h4>Fav Serie: {{ $seriefav }}</h4>
	<h4>Zodiac Sign: {{ $zodiac }}</h4>
	<h4>Quote: {{ $quote }}</h4>

	<h2>
		<a href="{{ route('index') }}">
			go back
		</a>
	</h2>

</body>
</html>