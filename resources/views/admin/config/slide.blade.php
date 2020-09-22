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
                    <div class="list_image">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Slide</label>
                           <input type="file" class="form-control" name="image[]" >
                        </div>
                    </div>
                    <div>
                        <a href="javascript:void(0)" class="add">Add</a>
                    </div>
  					<button type="submit" class="btn btn-success mr-2">Lưu thay đổi</button>
  				</form>
  			</div>
  		</div>
  	</div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $('.add').click(function(){
      $('.list_image').append(`<div class="form-group">
                                 <label for="exampleInputEmail1">Slide</label><br>
                                 <input type="file" class="form-control" name="image[]" ><a href="javascript:void(0)" class="btn btn-primary remote_image">Xoá</a>
                               </div>`)
  })
  $(document).on('click','.remote_image',function(){
       $(this).parent().remove();
  })
</script>
@endsection