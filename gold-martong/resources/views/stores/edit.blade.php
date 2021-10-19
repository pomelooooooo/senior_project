@extends('layouts.navbar')
@section('title','Store')
@push('head-script')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endpush
@section('content')
<script>
    var stores = "{{ route('stores.index') }}";
</script>

<h2 class="text-center">แก้ไขข้อมูลสาขา</h2>
    <div class="container">
        <hr class="mt-5 mb-6"/>
        <form action="{{url('/stores/update/'.$stores['id'])}}" method="{{method_field('POST')}}">
        {{csrf_field()}}
        <div class="row">
            <div class="col-6">
                <h4>ชื่อร้าน</h4>
            </div>
            <div class="col-6">
                <h4>เบอร์</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <input name="name" type="text" class="form-control" placeholder="" value="{{$stores->name}}"/>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <input name="tel" type="text" class="form-control" placeholder="" value="{{$stores->tel}}"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h4>หมายเลขประจำตัวผู้เสียภาษี</h4>
            </div>
            <div class="col-6">
                <h4>เลขทะเบียนการค้า</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <input name="tax_identification_number" type="text" class="form-control" placeholder="" value="{{$stores->tax_identification_number}}"/>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <input name="commercial_registration_number" type="text" class="form-control" placeholder="" value="{{$stores->commercial_registration_number}}"/>
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
                    <input name="address" type="text" class="form-control" placeholder="" value="{{$stores->address}}"/>
                </div>
            </div>
        </div>  
        <br/><br/>
        <div class="text-right">
            <button type="button" class="btn btn-secondary" onclick="window.location.href = stores;">กลับ</button>
            <button type="submit" class="btn btn-success">อัพเดต</button>
        </div>
        <input type="hidden" name="_method" value="PATCH"/>
        </form>
    </div>
@endsection