@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1>Sign up</h1>        
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-control"> 
                    {!! Form::label('name', 'Name') !!} 
                    {!! Form::text('name', old('name'), ['class'=>'form-control'] !!}
                </div>
                <div>
                    {!! Form::label('email', 'Email') !!} 
                    {!! Form::email('email', old('email'), ['class'=>'form-control'] !!}
                </div>
                <div>
                    {!! Form::label('password', 'Password') !!} 
                    {!! Form::password('password', ['class'=>'form-control'] !!}
                </div>
                <div>
                    {!! Form::label('password_confirmation', 'Confirmation') !!} 
                    {!! Form::password('password_confirmation', ['class'=>'form-control'] !!}
                </div>
                {!! Form::submit('Sign up', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
