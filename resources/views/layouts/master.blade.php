<!DOCTYPE html>
<!--[if (lt IE 10)|(IE 10) ]><html lang="en" class="ie"><![endif]-->
<!--[if (gt IE 10)|!(IE)]><!--> <html lang="en" class=""> <!--<![endif]-->
	<head>
		@include('layouts.common.head')
	</head>
	<body>
		<!--[if lt IE 10 ]>
			<div class="ienotice">
				You are using an <strong>outdated</strong> browser. 
				Please <a href="http://browsehappy.com/">upgrade your browser</a> 
				or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> 
				to improve your experience.
			</div>
		<![endif]-->
		
		@yield('content')
		@include('layouts.common.head')
	</body>
</html>