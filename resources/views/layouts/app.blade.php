<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PHP Blog</title>
		<link rel="stylesheet" href="{{ URL::asset('css/layout.css') }}" type="text/css">
			@yield('css')
	</head>

	<body>
		<div class="navbar">
			<ul>
				<li><a href="/new">New article</a></li>
				<li><a href="/">Articles</a></li>
				@if (Auth::user() !== null)
					<li class="right"><a href="/logout">Logout</a></li>
				@else
					<li class="right"><a href="/auth/register">Sign up</a></li>
					<li class="right"><a href="/login">Sign in</a></li>
				@endif
			</ul>
		</div>

		<div class="content">
			@if ($errors->count() > 0)
				<div class="alert">
					<strong>Whoops! Something went wrong!</strong>
					@foreach ($errors->all() as $error)
						<p>{{ $error }}</p>
					@endforeach
				</div>
			@endif

			@yield('content')
		</div>
	</body>
</html>
