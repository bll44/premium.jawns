<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header navbar-right">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#default-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ URL::to('/') }}">Premium Jawns</a>
		</div><!-- /.navbar-header -->

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-right" id="default-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="{{ URL::to('/') }}">Projects</a></li>
				<li><a href="{{ URL::to('/') }}">Curators</a></li>
				<li><a href="{{ URL::to('about') }}">About</a></li>
				@if(Auth::check())
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							aria-expanded="false">Dropdown <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Account</a></li>
						<li><a href="#">Profile</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="#"><i class="fa fa-power-off"></i> Log out</a></li>
					</ul>
				</li>
				@endif
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>