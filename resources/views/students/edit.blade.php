@extends('templates.master')

@section('content')

    <h2>Update Data</h2>
    <hr/>
    <a class="btn btn-primary" href="/students" style="margin-bottom: 15px;">Read Data</a>

    {!! Form::open(['id' => 'dataForm', 'method' => 'PATCH', 'url' => '/students/' . $student->id ]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name'); !!}
        {!! Form::text('name', $student->name , ['placeholder' => 'Enter name', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', $student->email, ['placeholder' => 'Enter email', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('fb', 'Facebook'); !!}
        {!! Form::url('fb', $student->fb, ['placeholder' => 'Enter facebook url', 'class' => 'form-control']); !!}
    </div>

    <div class="form-group">
        {!! Form::label('mobile', 'Mobile'); !!}
        {!! Form::text('mobile', $student->mobile, ['placeholder' => 'Enter mobile', 'class' => 'form-control']); !!}
    </div>

    {!! Form::submit('Update', ['class' => 'btn btn-primary pull-right']); !!}

    {!! Form::close() !!}
@endsection()