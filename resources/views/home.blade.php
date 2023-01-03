{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin page</title>
</head>
<body>
    <p>{{session('success')}}</p>
    <h1>Đây là trang chủ</h1>
    <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
</body>
</html> --}}
@section('css')
{{-- css custom for this page --}}

@endsection
@extends('layouts.master')

@section('title','Trang Home')
@section('breadcum') 
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home123</a></li>
                                <li class="breadcrumb-item active">test</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
@endsection
@section('content')

<h1>Hello there</h1>


@endsection

@section('scripts')
{{-- <script src="{{'resources/js/app.js'}}"></script> --}}
@vite('resources/js/custom.js')
{{-- script custom for this page --}}
@endsection