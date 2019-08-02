@extends('layouts.main')

@section('title','Show Single Doctor')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card" style="margin: 16px;">
            <div class="card-body">
                <h5 class="card-title">Name: {{ $doctor->name }}</h5>
                <p><strong>Status: </strong>{{ $doctor->status ? 'Opened' : 'Closed' }}
                </p>
                <p><strong> Address: </strong> {{ $doctor->address }}</p>
                <p> <strong> Specialist: </strong> {{ $doctor->specialist }}</p>
                <p><strong> Email: </strong> {{ $doctor->email }}</p>
                <p><strong> Phone: </strong> {{ $doctor->phone }}</p>
                <p><strong> Salary: </strong> {{ $doctor->salary }}</p>
                <p><strong> Password: </strong> {{ $doctor->password }}</p>

                <a href="{{ route('doctors.edit', $doctor->id )}} " class="btn btn-primary">Edit</a>

                <a 
                href="#" 
                onclick="event.preventDefault(); document.getElementById('delete-form').submit();"
                 class="btn btn-danger">Delete</a>
                <form id="delete-form" action="" method="post" style="display:none">
                    @csrf
                    @method('delete')
                </form>
            </div>
        </div>
    </div>
</div>


@stop