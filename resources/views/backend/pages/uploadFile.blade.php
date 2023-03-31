@extends('layouts.app')
@section('content')
<div class="mt-5 container">
    <h3 class="text-center">Upload Picture</h3>
    <form action="{{ URL::to('/upload-picture/'.$id.'/'.$name) }}"  method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group mb-3 mt-6">
            <label for="photo" class="">Select Picture</label>
            <input type="FILE" class="form-control bg-dark text-white" accept="image/*" id="photo" name="photo" value="">
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="save">Save</button>
        <button  class="btn btn-primary mb-2 ms-3"> <a class="text-light" href="dashboard.php?select=package">Back</a></button>
    </form>
</div>
@endsection