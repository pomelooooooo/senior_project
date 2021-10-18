@extends('layouts.navbar')
@section('title','Store')
@push('head-script')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endpush
@section('content')
<div class="container">
    </br>
        <h1>จัดการข้อมูลพื้นฐานร้าน</h1>
    </br></br>
        <div class="row">
            <div class="col-10 text-right">
                <form class="form-inline my-2 my-lg-0">
                    {{csrf_field()}}
                    <input class="form-control mr-sm-2" type="search" placeholder="ค้นหา" aria-label="Search">
                    <button class="btn btn-success" type="submit">ค้นหา</button>
                </form>
            </div>
            <div class="col-2">
                    {{csrf_field()}}
                    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" type="button">เพิ่มสาขา</button>
            </div>
           
        </div>
        <div class="row">
            <div class="col-12">
            <table class="table table-striped">
            <thead class="table-info">
                <tr>
                    <th class="col-2">ชื่อร้าน</th>
                    <th class="col-3">ที่อยู่</th>
                    <th class="col-3">เบอร์</th>
                    <th class="col-2"></th>
                    <th class="col-2"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td class="text-right">
                        <a class="btn btn-warning" href="stores/edit"><i class="fa fa-edit"></i> แก้ไข</a>
                    </td>
                    <td class="text-center">
                        <a class="btn btn-danger" href=""><i class="fa fa-trash"></i> ลบ</a>
                    </td>
                </tr>
                <tr>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td class="text-right">
                        <a class="btn btn-warning" href=""><i class="fa fa-edit"></i> แก้ไข</a>
                    </td> 
                    <td class="text-center">
                        <a class="btn btn-danger" href=""><i class="fa fa-trash"></i> ลบ</a>
                    </td>
                </tr>
                <tr>
                    <td>Larry the Bird</td>
                    <td>Thornton</td>
                    <td>@twitter</td>
                    <td class="text-right">
                        <a class="btn btn-warning" href=""><i class="fa fa-edit"></i> แก้ไข</a>
                    </td>
                    <td class="text-center">
                        <a class="btn btn-danger" href=""><i class="fa fa-trash"></i> ลบ</a>
                    </td>
                </tr>
            </tbody>
            </table>
            </br></br>
        </div>
    </div>
</div>

@endsection