@extends('layouts.master')
@section('titile', 'Account information')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Profile</li>
                    </ol>s
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                 
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg"
                                    alt="User profile picture">
                            </div>
                            <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Birthday:</b> <a class="float-right">{{ Auth::user()->birthday }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Email:</b> <a class="float-right">{{ Auth::user()->email }}</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Bio</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <p class="text-muted">{{ Auth::user()->bio }}</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a style="font-size: 30px"><strong>Update</strong></a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="settings">
                                    <form action="{{route('profileupdate')}}" method="post" class="form-horizontal">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName"
                                                    placeholder="Name" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Birthday</label>
                                            <div class="col-sm-10">
                                                <label for="join">
                                                    <input type="datetime-local" class="form-control" name="birthday"
                                                            style="background-color:white; width:100px" placeholder="Date">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail"
                                                    placeholder="Email" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Bio</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="inputExperience" placeholder="Some thing  about you" name="bio"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @include('layouts.partial.script')

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("input[type=datetime-local]");
    </script>
@endsection
