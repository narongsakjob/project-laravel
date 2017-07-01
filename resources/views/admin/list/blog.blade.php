@extends('admin.master')

@section('content')
  <div class="container">
    <div class="row">
      <a class="btn btn-primary" href="{{url('admin/blog/create')}}">Create</a>
      <table class="table table-striped">
        <tr>
          <th>ID</th>
          <th>Topic</th>
          <th>Action</th>
        </tr>
        @foreach($objs as $row)
          <tr>
            <td>{{$row->id}}</td>
            <td>{{$row->topic}}</td>
            <td>
              <a href="{{url('admin/blog/'.$row->id.'/edit')}}">EDIT</a>
              <form action="{{url('admin/blog/'.$row->id)}}" method="post" onsubmit="return(confirm('Do you want to delete this ?'))">
                {{ method_field('DELETE')}}
                {{ csrf_field() }}
                <button class="btn btn-danger">DELETE</button>
              </form>
            </td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
@stop
