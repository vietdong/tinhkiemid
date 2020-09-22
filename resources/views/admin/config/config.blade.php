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
                    <label for="exampleInputEmail1">Tên website</label>
                    <input type="text" class="form-control" name="value[namesite]" value="{{isset($model['namesite']['value']) ?$model['namesite']['value']:'' }}">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Bật tắt website</label>
                     <select class="form-control" name="value[toggle_website]">
                         <option value="1" @if(isset($model['toggle_website']['value'])) {{$model['toggle_website']['value'] == 1 ? 'selected' :''}}  @endif>Bật</option>
                         <option value="0" @if(isset($model['toggle_website']['value'])) {{$model['toggle_website']['value'] == 0 ? 'selected' :''}}  @endif>Tắt</option>
                     </select>
                    </div>
  				<button type="submit" class="btn btn-success mr-2">Lưu thay đổi</button>
  				</form>
  			</div>
  		</div>
  	</div>
  </div>

@endsection