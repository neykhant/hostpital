@extends('layouts.main')

@section('title','View All Doctors')

@section('content')

<div class="row">
    <div class="col">
        <h1>List of Doctors</h1>
        <hr>

        @if(session('secondary'))
            <div class="alert alert-secondary">
                {{ session('secondary') }}
            </div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Specialist</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Salary</th>
                    <th>Password</th>
                </tr>
            </thead>
            @foreach($doctors as $doctor)
            <tbody>
                <tr>
                    <td><a href="{{ route('doctors.show', $doctor->id )}}">{{ $doctor->name }}</a></td>
                    <td>{{ $doctor->address }}</td>
                    <td>{{ $doctor->specialist }}</td>
                    <td>{{ $doctor->phone }}</td>
                    <td>{{ $doctor->email }}</td>
                    <td>{{ $doctor->salary }}</td>
                    <td>{{ $doctor->password }}</td>

                </tr>
            </tbody>
            @endforeach

        </table>
    </div>
</div>


@stop