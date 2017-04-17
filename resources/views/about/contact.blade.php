@extends('layouts.app')

@section('content')

<div class="container">
<h1></h1>

<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>

{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

@if(Auth::guest())
<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>
@else
<div class="form-group">
    {!! Form::label('Your Name') !!}
    {!! Form::text('name', Auth::user()->name, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your name')) !!}
</div>
@endif
@if(Auth::guest())
<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>
@else
<div class="form-group">
    {!! Form::label('Your E-mail Address') !!}
    {!! Form::text('email', Auth::user()->email, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your e-mail address')) !!}
</div>
@endif

<div class="form-group">
    {!! Form::label('Your Message') !!}
    {!! Form::textarea('message', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Your message')) !!}
</div>

<div class="form-group">
    {!! Form::submit('Submit!', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
</div>
@endsection