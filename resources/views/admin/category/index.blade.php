@extends('admin.layout')
@section('content')

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Danh mục</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Name</th>
                      <th colspan='2'><a href="{{route('category.create')}}">Thêm</a></th>

                    </tr>
                  </thead>
                  <tbody>
                      @foreach($cate as $key => $value)
                    <tr>
                      <td>{{$key}}</td>
                      <td>{{$value->name}}</td>
                      <td>
                        <form action="{{route('category.destroy',['category' => $value->id])}}" method="post">
                        @method('delete')
                        @csrf
                          <button class="btn btn-default" type="submit" onclick="return confirm('Are you sure you want to submit this form?');">Xoá</button>
                      </form>
                    </td>
                      <td><a href="{{route('category.edit',['category' => $value->id])}}">Edit</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
@endsection