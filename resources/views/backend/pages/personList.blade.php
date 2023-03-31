@extends('layouts.app')
@section('main')
	<div class="dashboard container-fluid  pt-4">
		<h1 class="text-center text-warning mt-3">DASHBOARD PAGE</h1>
        <div class="menu-body bg-dark border border-warning rounded rounded-3">
            <table class="table table-dark home-menu container mt-2">
                <tr d-flex flex-wrap justify>
                    <td class="text-start align-middle"><div><a class="fw-bold text-light text-decoration-none"  href="{{ route('personList') }}" ><i class="bi bi-building-add"></i>  Person List</a></div></td>
                    <td class="text-start align-middle"><div><a class="fw-bold text-light text-decoration-none"  href="" ><i class="bi bi-person"></i>  New Item</a></div></td>
                    <td class="text-start align-middle"><div><a class="fw-bold text-light text-decoration-none"  href="" ><i class="bi bi-person-bounding-box"></i>  Employee</a></div></td>
                    <td class="text-start align-middle"><div><a class="fw-bold text-light text-decoration-none"  href="" ><i class="bi bi-person-fill-add"></i>  Member</a></div></td>
                    <td class="text-start align-middle"><div><a class="fw-bold text-light text-decoration-none"  href="" ><i class="bi bi-person-workspace"></i>  Person Trainer</a></div></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="container mt-2">
        <a class="p-2 bg-dark " href="{{ route('newPerson') }}">Add new</a>
    </div>
@endsection
@section('content')
<table class="table container">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Picture</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($personList as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->personName}}</td>
                <td>{{$item->flag}}</td>
                <td>
                    <button><a href=" {{ URL::to('/new-picture/'.$item->id.'/'.$item->personName) }} ">Upload</a></button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection