@extends('frontend.layouts.master')


@section('content')

    @if (session()->has('message'))
        <li class="alert alert-success">{{session()->get('message')}}</li>
    @endif
    @if (session()->has('dmessage'))
    <li class="alert alert-danger">{{session()->get('dmessage')}}</li>
@endif

        <legend>Add company</legend>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($company as $element)
                    <tr>
                    <td>{{$element->id}}</td>
                    <td>{{ $element->name }}</td>
                    <td>{{ $element->address }}</td>
                    <td>{{ $element->slug }}</td>
                    <td>
                        <a href="{{route('company.show',$element->id)}}" class="btn btn-success">Edit</a>
                    </td>
                    <td>
                        <form action="{{route('company.delete',$element->id)}}" method="post" role="form">
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>

                    </tr>
                @endforeach

            </tbody>
            <a href="{{route('company.showForm')}}" class="btn btn-info">Add New</a>
        </table>

        {{ $company->links() }}

@endsection
