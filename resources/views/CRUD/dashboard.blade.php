
@extends('layouts.app')
@section('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@endsection
@section('content')
	<div class="dashboard container-fluid  pt-4">
		<h1 class="text-center text-warning mt-3">DASHBOARD PAGE</h1>
        <div class="menu-body bg-dark border border-warning rounded rounded-3">
            <table class="table table-dark home-menu container mt-2">
                <tr d-flex flex-wrap>
                    <td class="text-start align-middle mmm"><div class="dblink" ><a class="fw-bold text-light open text-decoration-none"  href="dashboard.php?select=role" ><i class="bi bi-person"></i>  New Item</a></div></td>
                    <td class="text-start align-middle mmm"><div class="dblink" ><a class="fw-bold text-light open text-decoration-none"  href="dashboard.php?select=branch" ><i class="bi bi-building-add"></i>  Branch</a></div></td>
                    <td class="text-start align-middle mmm"><div class="dblink" ><a class="fw-bold text-light open text-decoration-none"  href="dashboard.php?select=employee" ><i class="bi bi-person-bounding-box"></i>  Employee</a></div></td>
                    <td class="text-start align-middle mmm"><div class="dblink" ><a class="fw-bold text-light open text-decoration-none"  href="dashboard.php?select=member" ><i class="bi bi-person-fill-add"></i>  Member</a></div></td>
                    <td class="text-start align-middle mmm"><div class="dblink" ><a class="fw-bold text-light open text-decoration-none"  href="dashboard.php?select=person_trainer" ><i class="bi bi-person-workspace"></i>  Person Trainer</a></div></td>
                    <td class="text-start align-middle mmm"><div class="dblink" ><a class="fw-bold text-light open text-decoration-none"  href="dashboard.php?select=device" ><i class="bi bi-motherboard"></i>  Device</a></div></td>
                    <td class="text-start align-middle mmm"><div class="dblink" ><a class="fw-bold text-light open text-decoration-none"  href="dashboard.php?select=service"><i class="bi bi-bank"></i>  Service</a></div></td>
                    <td class="text-start align-middle mmm"><div class="dblink" ><a class="fw-bold text-light open text-decoration-none"  href="dashboard.php?select=package" ><i class="bi bi-box-seam-fill"></i>  Package</a></div></td>
                    <td class="text-start align-middle mmm"><div class="dblink" ><a class="fw-bold text-light open text-decoration-none"  href="dashboard.php?select=utilities" ><i class="bi bi-apple"></i>  Utilities</a></div></td>
                    <td class="text-start align-middle mmm"><div class="dblink" ><a class="fw-bold text-light open text-decoration-none"  href="dashboard.php?select=course" ><i class="bi bi-journal-check"></i>  Course</a></div></td>
                    <td class="text-start align-middle mmm"><div class="dblink" ><a class="fw-bold text-light open text-decoration-none"  href="dashboard.php?select=galery_type" ><i class="bi bi-file-earmark-image"></i>  Galery Type</a></div></td>
                    <td class="text-start align-middle mmm"><div class="dblink" ><a class="fw-bold text-light open text-decoration-none"  href="dashboard.php?select=galery" ><i class="bi bi-images"></i>  Galery</a></div></td>
                </tr>
            </table>
        </div>
    </div>
@endsection
@section('insert')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
@endsection