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
    <hr/>
        <div class="row">
            <div class="col-10 text-right">
                <form class="form-inline my-2 my-lg-0">
                {{csrf_field()}}
                    <input class="form-control mr-sm-2" type="search" placeholder="ค้นหา" aria-label="Search">
                    <button class="btn btn-success" type="submit">ค้นหา</button>
                </form>
            </div>
            <div class="col-2">
                <form method="POST" action="{{ route('stores.store') }}">
                    {{csrf_field()}}
                    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal" type="button"><i class="fa fa-edit"></i> เพิ่มสาขา</button>
                    <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="exampleModalLabel">ลงทะเบียนสาขา</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-6">
                                    <h5>ชื่อร้าน</h5>
                                </div>
                                <div class="col-6">
                                    <h5>เบอร์</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control" placeholder=""/>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input name="tel" type="text" class="form-control" placeholder=""/>
                                    </div>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-6">
                                    <h5>หมายเลขประจำตัวผู้เสียภาษี</h5>
                                </div>
                                <div class="col-6">
                                    <h5>เลขทะเบียนการค้า</h5>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <input name="tax_identification_number" type="text" class="form-control" placeholder=""/>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <input name="commercial_registration_number" type="text" class="form-control" placeholder=""/>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-12">
                                    <h5>ที่อยู่</h5>
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input name="address" type="text" class="form-control" placeholder=""/>
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                            <button type="submit" class="btn btn-primary" >บันทึก</button>
                        </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
           
        </div>
        <br/>
        <div class="row">
            <div class="col-12">
            <table class="table table-striped">
            <thead class="table-info">
                <tr>
                    <th scope="col">ชื่อร้าน</th>
                    <th scope="col">ที่อยู่</th>
                    <th scope="col">เบอร์</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($stores as $row)
                <tr>
                    <td>{{$row['name']}}</td>
                    <td>{{$row['address']}}</td>
                    <td>{{$row['tel']}}</td>
                    <td class="text-right">
                        <a class="btn btn-warning" href="{{url('/stores/edit/'.$row['id'])}}"><i class="fa fa-edit"></i> แก้ไข</a>
                    </td>
                    <td class="text-center">
                        <form class="delete_from" action="{{url('/stores/delete/'.$row['id'])}}" method="GET">
                            {{csrf_field()}}
                            @method('POST')
                            <input type="hidden" name="_method" value="DELETE"/>
                            <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i> ลบ</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
            </br></br>
        </div>
    </div>
</div>

    <script type="text/javascript">
        $(document).ready(function()
        { $('.delete_from').on('submit', function(){
            if(confirm("ต้องการลบข้อมูลหรือไม่")) {
                return true;
            }
            else {
                return false;
            }
            });
        });

    </script>

@endsection