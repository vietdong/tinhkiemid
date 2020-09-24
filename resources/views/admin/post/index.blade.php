@extends('admin.layout')
@section('content')

<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Danh sách tin tức</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>STT</th>
            <th>Title</th>
            <th>Trạng thái</th>
            <th colspan='2'><a href="{{route('post.create')}}">Thêm</a></th>

        </tr>
        </thead>
        <tbody>
            @foreach($post as $key => $value)
        <tr>
            <td>{{$key}}</td>
            <td>{{$value->title}}</td>
            <td>{{$value->active}}</td>
            <td>
            <form action="{{route('post.destroy',['post' => $value->id])}}" method="post">
            @method('delete')
            @csrf
                <button class="btn btn-default" type="submit" onclick="return confirm('Bạn có muốn xoá bài viết không ?');">Xoá</button>
            </form>
        </td>
            <td><a href="{{route('post.edit',['post' => $value->id])}}">Edit</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>
@endsection