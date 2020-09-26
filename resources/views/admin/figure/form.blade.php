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
<form method="post" action="{{ route('figure.store') }}">
{{csrf_field()}}

<input type="hidden" value="{{isset($model) ? $model->id : ''}}" name="id">
  <div class="form-group">
    <label for="exampleInputEmail1">Tên nhân vật</label>
    <input type="" name="name" class="form-control" placeholder="Tên nhân vât" value="{{isset($model) ? $model->name : ''}}">
  </div>
  <button type="submit" class="btn btn-primary">Lưu</button>
  <a href="{{route('figure.index')}}" class="btn btn-secondary">Trở về</a>
</form>

@endsection