@extends('backend.layouts.app');
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Category List</h3>
    </div>
@include('backend.error.error')
@include('backend.error.success')
    <div class="card-body">
        <form role="form" action="{{route('category.store')}}" method="POST">
            @csrf
            <div class="card-body">

              <div class="form-group">
                <label>Category Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter category name">
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="isactive" value="1">
                <label class="form-check-label" for="exampleCheck1">Publish ?</label>
              </div>
            </div>

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
    </div>
  </div>
@endsection
