@extends('layouts.index')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="col-md-10 mt-6">
            <hr>
            {!! Form::model($student, ['route' => ['student.update',$student->id], 'method'=>'PUT']) !!}
            @include('student.field')
            {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
            {!! link_to('/student', 'Back',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}


            </div>        
        </div>    
    </div>
        
@endsection