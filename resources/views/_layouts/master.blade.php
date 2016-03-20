<!doctype html>
<html lang="en">

@include('_layouts/header')

<body>

@include('_layouts/navigation/default-nav')

@yield('styles')

	<div class="container">

		@yield('content')

	</div>

@yield('scripts')

</body>
@include('._layouts/footer')

</html>