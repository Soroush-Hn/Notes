<!doctype html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<meta name="viewport"
			  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<script src="https://cdn.tailwindcss.com"></script>
<!--		<link rel="stylesheet" href="--><?php //?><!--">-->
		<link rel="icon" href="https://www.php.net/favicon.svg?v=2">
		<title><?php global$config; global$uri; if (array_key_exists($uri, $config['Heading'])) echo $config['Heading'][$uri];?></title>
	</head>
	<body class="h-full <?php if ($uri === '/login' or $uri === '/signup') echo 'bg-gray-900'; else echo 'bg-gray-100';?>">
