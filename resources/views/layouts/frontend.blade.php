<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('frontend.manager.head')
<body>
    @include('frontend.manager.nav')
    @yield('main')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
	<script src="https://cdn.jsdelivr.net/npm/face-api.js@0.22.2/dist/face-api.js" integrity="sha256-JOJ7NmVm2chxYZ1KPcAYd2bwVK7NaFj9QKMp7DClews=" crossorigin="anonymous"></script>
	<script src="{{ asset('./js/scripts.js') }}"></script>
</body>
</html>
