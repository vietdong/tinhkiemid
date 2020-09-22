@extends('admin.layout')
@section('content')

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Danh sách câu hỏi bí mật</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>STT</th>
                      <th>Name</th>
                      <th colspan='2'><a href="{{route('question.create')}}">Thêm</a></th>

                    </tr>
                  </thead>
                  <tbody>
                      @foreach($question as $key => $value)
                    <tr>
                      <td>{{$key}}</td>
                      <td>{{$value->name}}</td>
                      <td>
                        <form action="{{route('question.destroy',['question' => $value->id])}}" method="post">
                        @method('delete')
                        @csrf
                          <button class="btn btn-default" type="submit">Xoá</button>
                      </form>
                    </td>
                      <td><a href="{{route('question.edit',['question' => $value->id])}}">Edit</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          @endsection