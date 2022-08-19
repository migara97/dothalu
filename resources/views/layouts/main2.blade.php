@include('templates.head2')
<body>
    @include('templates.navigation-menu')
    @include('templates.sidebar')
    @include('sweet::alert')	
    @yield('content')	 
	
	@yield('scripts')
</body>

</html>