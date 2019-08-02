@extends('layouts.main')

@section('title','Doctor')

@section('content')

<div class="row">
    <div class="col">
        <div class="wraper">
            <h1 class="text-center">Add Doctors</h1>
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

            {{ Form::open() }}

            <div class="form-group">
                {{ Form::label('name','Name') }}
                {{ Form::text('name','', ['class' => 'form-control ff', 'rows' => '4' ]) }}
            </div>

            <div class="form-group">
                {{ Form::label('address','Address') }}
                {{ Form::text('address','', ['class' => 'form-control ff']) }}
            </div>

            <div class="form-group">
                {{ Form::label('specialist','Specialist') }}
                {{ Form::text('specialist','', ['class' => 'form-control ff']) }}
            </div>

            <div class="form-group">
                {{ Form::label('phone','Phone') }}
                {{ Form::text('phone','', ['class' => 'form-control ff']) }}
            </div>

            <div class="form-group">
                {{ Form::label('email','Email') }}
                {{ Form::text('email','', ['class' => 'form-control ff']) }}
            </div>

            <div class="form-group">
                {{ Form::label('salary','Salary') }}
                {{ Form::text('salary','', ['class' => 'form-control ff']) }}
            </div>

            <div class="form-group">
                {{ Form::label('password','Password') }}
                {{ Form::text('password','', ['class' => 'form-control ff']) }}
            </div>

            {{ Form::submit('Submit',['class' => 'btn btn-primary']) }}

            {{ Form::close() }}

            <!-- <form   method="post">
                        @csrf 
                        
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" id="address">
                        </div>

                        <div class="form-group">
                            <label for="specialist">Specialist</label>
                            <input type="text" class="form-control" name="specialist" id="specialist">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone </label>
                            <input type="phone"  class="form-control" name="phone" id="phone" >
                        </div>

                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email"  class="form-control" name="email" id="email" >
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary </label>
                            <input type="text"  class="form-control" name="salary" id="salary" >
                        </div>

                        <div class="form-group">
                            <label for="password">Password </label>
                            <input type="text"  class="form-control" name="password" id="password" >
                        </div>

                        <button type="submit" class="btn btn-primary"> Submit</button>
                    </form> -->
        </div>
    </div>
</div>


@stop