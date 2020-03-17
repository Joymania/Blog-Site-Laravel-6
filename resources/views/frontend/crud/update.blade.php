@extends('frontend.layouts.master')


@section('content')
<form action="{{route('submit.data',$company->id)}}" method="POST" role="form">
    <legend>Update company</legend>
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="">Company name</label>
        <input type="text" name="name" class="form-control" value="{{ $company->name }}">
    </div>

    <div class="form-group">
        <label for="">Company address</label>
        <input type="text" name="address" class="form-control" value="{{ $company->address }}">
    </div>


    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{URL::to('companies')}}" class="btn btn-danger">Back</a>
</form>

@endsection
