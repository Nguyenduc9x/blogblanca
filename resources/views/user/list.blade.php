@extends('layouts.master')

@section('titile',"Danh sách người dùng")

@section('content')
<hr>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key=>$us)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$us->email}}</td>
                    <td>{{$us->password}}</td>
                    <td>
                        <a href="/create/{{$us->id}}" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
    </table>
@endsection