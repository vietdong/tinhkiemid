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
              <label for="exampleInputEmail1">Link sự kiện</label>
              <input type="text" class="form-control" name="value[linkevent]" value="{{isset($model['linkevent']['value']) ?$model['linkevent']['value']:'' }}">
            </div>
  					<button type="submit" class="btn btn-success mr-2">Lưu thay đổi</button>
  				</form>
  			</div>
  		</div>
  	</div>
  </div>

@endsection