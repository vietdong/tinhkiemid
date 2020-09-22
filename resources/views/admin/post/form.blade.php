@extends('admin.layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
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
<form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
{{csrf_field()}}

<input type="hidden" value="{{isset($model) ? $model->id : ''}}" name="id">
  <div class="form-group">
    <label for="exampleInputEmail1">Tiêu đề bài viết</label>
    <input type="" name="title" class="form-control" placeholder="Tiêu đề bài viết" value="{{isset($model) ? $model->name : ''}}">
  </div>
  <div class="form-row">
  <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Danh mục tra</label>
        <select class="form-control" name="cate_id">
            <option value="1">Công khai</option>
            <option value="0">Chỉ mình tôi</option>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Trạng thái</label>
        <select class="form-control" name="active">
            <option value="1">Công khai</option>
            <option value="0">Chỉ mình tôi</option>
        </select>
    </div>
    <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Hẹn giờ công khai</label>
        <input type="date" name="display_time" class="form-control" required >
    </div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nội dung</label>
    <textarea id="editor" name="content">{{isset($model) ? $model->content : ''}}</textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Ảnh đại diện</label>
    <input type="file" name="image" class="form-control">
  </div>
  <div>
    @if(isset($model))
         <img src="/uploads/{{$model->image}}" width="100px">
    @endif
  </div>
  <button type="submit" class="btn btn-primary">Lưu</button>
  <a href="{{route('post.index')}}" class="btn btn-secondary">Trở về</a>
</form>
<script>
    tinymce.init({
        selector: '#editor',
        theme: 'modern',
        browser_spellcheck: true,
        height: 480,
        // images_upload_url: '{{route("upload.file")}}',
        // images_upload_base_path: '/some/basepath',
        plugins: [
            'advlist autolink link code image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'save table contextmenu directionality emoticons template paste textcolor'
        ],

        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | fontselect',

       images_upload_handler: function (blobInfo, success, failure) {
    var xhr, formData;
    xhr = new XMLHttpRequest();
    xhr.withCredentials = false;
    xhr.open('POST', '{{route("upload.file")}}');
    xhr.setRequestHeader("X-CSRF-Token", "{{ csrf_token() }}");

    xhr.onload = function() {
        var json;

        if (xhr.status != 200) {
            failure('HTTP Error: ' + xhr.status);
            return;
        }

        json = JSON.parse(xhr.responseText);

        if (!json || typeof json.location != 'string') {
            failure('Invalid JSON: ' + xhr.responseText);
            return;
        }

        success(json.location);
    };

    formData = new FormData();
    formData.append('file', blobInfo.blob(), blobInfo.filename());

    xhr.send(formData);
}
    });



</script>
@endsection