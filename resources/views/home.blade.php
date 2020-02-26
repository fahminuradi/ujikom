@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat datang <b>{{ Auth::user()->name }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, facere.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, facere.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, facere.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, facere.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, facere.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, facere.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, facere.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
