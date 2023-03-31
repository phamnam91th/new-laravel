@extends('layouts.app')
@section('content')
<div class="mt-5 container">
    <h3 class="text-center">Add new Package</h3>
    <form action="{{ route('addPerson') }}"  method="post">
        {{csrf_field()}}
        <div class="form-group mb-3 mt-6">
            <label for="name" class="">Person name</label>
            <input type="text" class="form-control bg-dark text-white" id="name" name="name" value="">
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="save">Save</button>
        <button  class="btn btn-primary mb-2 ms-3"> <a class="text-light" href="dashboard.php?select=package">Back</a></button>
    </form>
</div>
@endsection