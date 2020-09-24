@extends('admin.layout')
@section('content')

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Name</th>
                      <th colspan='2'><a href="{{route('server.create')}}">Thêm</a></th>

                    </tr>
                  </thead>
                  <tbody>
                      @foreach($server as $key => $value)
                    <tr>
                      <td>{{$key}}</td>
                      <td>{{$value->name}}</td>
                      <td>
                        <form action="{{route('server.destroy',['server' => $value->id])}}" method="post">
                        @method('delete')
                        @csrf
                          <button class="btn btn-default" type="submit" onclick="return confirm('Bạn có muốn xoá máy chủ không ?');">Xoá</button>
                      </form>
                    </td>
                      <td><a href="{{route('server.edit',['server' => $value->id])}}">Edit</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          @endsection
