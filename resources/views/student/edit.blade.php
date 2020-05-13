@extends('layouts.index')

@section('content')
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-12">
            <div class="card-body">

            {!! Form::model($student, ['route' => ['student.update',$student->id], 'method'=>'PUT']) !!}
            @include('student.field')
            <button type="submit" class="btn btn-primary"><i class="fa fa-refresh"></i> Ubah</button>
            {!! Form::close() !!}
            
            </div>
        </div>
    </div>
        
@endsection