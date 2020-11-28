<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<a class="navbar-brand" href="{{ ('/')}}">Test</a>
			<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
				@if(auth()->check())
					<li class="nav-item">
						<a class="nav-link" href="{{ route('logout') }}">LogOut</a>
					</li>
				@else
					<li class="nav-item">
						<a class="nav-link" href="{{ ('/')}}">Login</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('registrtation') }}">Register</a>
					</li>
				@endif
			</ul>
		</div>
	</div>
</nav>