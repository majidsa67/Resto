<!DOCTYPE html>
<!--
	Resto by GetTemplates.co
	URL: https://gettemplates.co
-->
<html lang="en">

@include('layouts.partials.header')
<body data-spy="scroll" data-target="#navbar" class="static-layout">

@include('layouts.partials.sidenav')
<div id="canvas-overlay"></div>


@yield('content')

@include('layouts.partials.footer')


<!-- External JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="/Resto/assets/vendor/bootstrap/popper.min.js"></script>
<script src="/Resto/assets/vendor/bootstrap/bootstrap.min.js"></script>
<script src="/Resto/assets/vendor/select2/select2.min.js "></script>
<script src="/Resto/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
<script src="/Resto/assets/vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Main JS -->
<script src="/Resto/assets/js/app.min.js "></script>
</body>
</html>
