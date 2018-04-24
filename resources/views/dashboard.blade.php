@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                You are logged in as Admin!
                <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">iphone</th>
                            <th scope="col">Problem</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Place Name</th>
                            <th scope="col">Zip Code</th>
                            <th scope="col">Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($repairs as $repair)
                            <tr>
                                <th scope="row">{{ $repair->id }}</th>
                                <td>{{ $repair->iphone }}</td>
                                <td>{{ $repair->problem }}</td>
                                <td>{{ $repair->first_name }}</td>
                                <td>{{ $repair->last_name }}</td>
                                <td>{{ $repair->email }}</td>
                                <td>{{ $repair->address }}</td>
                                <td>{{ $repair->place_name }}</td>
                                <td>{{ $repair->zip_code }}</td>
                                <td>{{ $repair->note }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
