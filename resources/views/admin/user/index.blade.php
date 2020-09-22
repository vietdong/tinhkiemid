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
            <th>Tên tài khoản</th>
            <th>Email</th>
            <th>Máy chủ</th>
            <th>Số điện thoại</th>
            <th>Trạng thái</th>
            <th colspan='2'><a href="{{route('user.create')}}">Thêm</a></th>

        </tr>
        </thead>
        <tbody>
            @foreach($user as $key => $value)
        <tr>
            <td>{{$key}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->server_id}}</td>
            <td>{{$value->phone}}</td>
            <td>{{$value->active}}</td>
            <td>
            <form action="{{route('user.destroy',['user' => $value->id])}}" method="post">
            @method('delete')
            @csrf
                <button class="btn btn-default" type="submit">Xoá</button>
            </form>
        </td>
            <td><a href="{{route('user.edit',['user' => $value->id])}}">Edit</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>
</div>
@endsection