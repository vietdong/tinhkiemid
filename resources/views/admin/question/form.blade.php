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
<form method="post" action="{{ route('question.store') }}">
{{csrf_field()}}

<input type="hidden" value="{{isset($model) ? $model->id : ''}}" name="id">
  <div class="form-group">
    <label for="exampleInputEmail1">Câu hỏi bí mật</label>
    <input type="" name="name" class="form-control" placeholder="Câu hỏi bí mật" value="{{isset($model) ? $model->name : ''}}">
  </div>
  <button type="submit" class="btn btn-primary">Lưu</button>
  <a href="{{route('question.index')}}" class="btn btn-secondary">Trở về</a>
</form>

@endsection