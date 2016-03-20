<!doctype html>
<html lang="en">

@include('_layouts.header')

<body>

@yield('styles')

	<div class="container">

		@yield('content')

	</div>

@yield('scripts')

</body>
@include('._layouts.footer')

</html>