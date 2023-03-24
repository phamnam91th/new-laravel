@extends('layouts.app')
<head>
	
</head>
@section('head')
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
	<link rel="stylesheet" href="{{ asset('css/faceDetect.css') }}">
@endsection

@section('content')
	<h1>Chương Trình Nhận diện Gương Mặt</h1>
	<p id="loading">Hệ thống đang tải dữ liệu ... </p>
	<input type="file" name="file" id="file-input" />
	<div id="pic-content"></div>
@endsection

@section('insert')
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
	<script src="https://cdn.jsdelivr.net/npm/face-api.js@0.22.2/dist/face-api.js" integrity="sha256-JOJ7NmVm2chxYZ1KPcAYd2bwVK7NaFj9QKMp7DClews=" crossorigin="anonymous"></script>
	<script src="{{ asset('./js/scripts.js') }}"></script>
@endsection