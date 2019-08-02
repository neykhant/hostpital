@extends('layouts.main')

@section('title','Edit a Doctor')

@section('content')

<div class="row">
    <div class="col">
        <div class="wraper">
            <h1 class="text-center">Edit a Doctors</h1>
            <hr>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error}} </li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
            @endif

            {{ Form::model($doctor ,['route' => ['doctors.update', $doctor->id ]]) }}
            @method('put')

            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name',$doctor->name , ['class' => 'form-control ff', 'rows' => '4' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('address','Address') }}
                {{ Form::text('address',$doctor->address, ['class' => 'form-control ff']) }}
            </div>

            <div class="form-group">
                {{ Form::label('specialist','Specialist') }}
                {{ Form::text('specialist',$doctor->specialist , ['class' => 'form-control ff']) }}
            </div>

            <div class="form-group">
                {{ Form::label('phone','Phone') }}
                {{ Form::text('phone',$doctor->phone , ['class' => 'form-control ff']) }}
            </div>

            <div class="form-group">
                {{ Form::label('email','Email') }}
                {{ Form::text('email',$doctor->email , ['class' => 'form-control ff']) }}
            </div>

            <div class="form-group">
                {{ Form::label('salary','Salary') }}
                {{ Form::text('salary',$doctor->salary , ['class' => 'form-control ff']) }}
            </div>

            <div class="form-group">
                {{ Form::label('password','Password') }}
                {{ Form::text('password',$doctor->password , ['class' => 'form-control ff']) }}
            </div>

            <div class="from-group from-check">
                {{ Form::checkbox('status', null, false ,['class' => 'form-check-input']) }}
                {{ Form::label('status','Close this Doctor?', ['class' => 'form-check-label']) }}
            </div>

            <a href=" {{ route('doctors.show', $doctor->id )}}" class="btn btn-secondary">Cancel</a>
            {{ Form::submit('Submit',['class' => 'btn btn-primary']) }}

            {{ Form::close() }}


            <!-- <form method="post">
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $doctor->name }}">
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" value="{{ $doctor->address }}">
                </div>

                <div class="form-group">
                    <label for="specialist">Specialist</label>
                    <input type="text" class="form-control" name="specialist" id="specialist" value="{{ $doctor->specialist }}">
                </div>

                <div class="form-group">
                    <label for="phone">Phone </label>
                    <input type="phone" class="form-control" name="phone" id="phone" value="{{ $doctor->phone }}">
                </div>

                <div class="form-group">
                    <label for="email">Email </label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ $doctor->email }}">
                </div>
                <div class="form-group">
                    <label for="salary">Salary </label>
                    <input type="text" class="form-control" name="salary" id="salary" value="{{ $doctor->salary }}">
                </div>

                <div class="form-group">
                    <label for="password">Password </label>
                    <input type="text" class="form-control" name="password" id="password" value="{{ $doctor->password }}">
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="status">
                    <label class="form-check-label" for="exampleCheck1">Close this Ticket?</label>
                </div>

                <a href=" {{ route('doctors.show', $doctor->id )}}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary"> Submit</button>
            </form> -->
        </div>
    </div>
</div>


@stop