@extends('frontend.layouts.master')

@section('content')


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div>
    @if (session()->has('message'))
        <li class="alert alert-success">{{session()->get('message')}}</li>
    @endif
</div>

<form action="{{route('company.add')}}" method="POST" role="form">
    <legend>Add company</legend>
    @csrf
    <div class="form-group">
        <label for="">Company name</label>
        <input type="text" name="name" class="form-control" id="" placeholder="Enter your company name">
    </div>

    <div class="form-group">
        <label for="">Company address</label>
        <input type="text" name="address" class="form-control" id="" placeholder="Enter your company address">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{URL::to('companies')}}" class="btn btn-danger">Back</a>
</form>

@endsection
