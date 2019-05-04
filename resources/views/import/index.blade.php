@extends('layout')

@section('header')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    <strong>Success!</strong> {{ session()->get('success') }}
                </div>
            @endif
            <div class="header-body">
                <div class="row">
                    <div class="col-sm">
                        <form method="post" action="{{ route('import.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="file" type="file" placeholder="upload csv" class="form-control" />
                                    </div>

                                    <button class="btn btn-outline-success" type="submit">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')

@stop
