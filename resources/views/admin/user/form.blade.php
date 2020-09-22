@extends('admin.layout')
@section('content')
@if(session('check'))
    <div class="col-12">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('check')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
@endif
<form method="post" action="{{ route('user.store') }}">
{{csrf_field()}}

<input type="hidden" value="{{isset($model) ? $model->id : ''}}" name="id">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên tài khoản</label>
    <input type="" name="name" class="form-control" placeholder="Tên tài khoản" value="{{isset($model) ? $model->name : ''}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <select name="server_id" class="form-control">
        @foreach($server as $value)
        <option>{{$value->name}}</option>
        @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="" name="email" class="form-control" placeholder="Email" value="{{isset($model) ? $model->email : ''}}">
  </div>
  <button type="submit" class="btn btn-primary">Lưu</button>
  <a href="{{route('user.index')}}" class="btn btn-secondary">Trở về</a>
</form>

@endsection