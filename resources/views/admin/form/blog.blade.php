@extends('admin.master')
@section('content')
  <div class="container">
    <div class="row">
      <h3>From Create Content</h3>
      <form action="{{$url}}" method="POST">
        {{ method_field($method) }}
        {{ csrf_field() }}
        <div class="form-group" >
            <label for="topic">Topic</label>
            <input type="text" class="form-control" name="topic" placeholder="Topic" value="{{$obj->topic or ''}}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" row="8" cols="40">{{$obj->content or ''}}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>
@stop