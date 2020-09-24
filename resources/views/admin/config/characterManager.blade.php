@extends('admin.layout')
@section('content')
  <div class="row">
  	@if(session('check_config'))
        <div class="col-12">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('check_config')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
    @endif
  	<div class="col-md-12">
  		<div class="card">
  			<div class="card-body">
  				<h4 class="card-title">Cấu hình website</h4>
  				<form class="forms-sample" action="{{route('config.save')}}" method="post" enctype="multipart/form-data">
  					@csrf
                    <div class="form-group">
                    <label for="exampleInputEmail1">Bật tắt menu quản lý nhân vật</label>
                     <select class="form-control" name="value[character]">
                         <option value="1" @if(isset($model['character']['value'])) {{$model['character']['value'] == 1 ? 'selected' :''}}  @endif>Bật</option>
                         <option value="0" @if(isset($model['character']['value'])) {{$model['character']['value'] == 0 ? 'selected' :''}}  @endif>Tắt</option>
                     </select>
                    </div>
  				<button type="submit" class="btn btn-success mr-2">Lưu thay đổi</button>
  				</form>
  			</div>
  		</div>
  	</div>
  </div>

@endsection