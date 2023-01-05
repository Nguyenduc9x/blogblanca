@extends('layouts.master')

@section('titile', 'Danh sách người dùng')

@section('content')
    <hr>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Fullname</th>
                <th>Username</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($users) && $users->count())
                @foreach ($users as $key => $us)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $us->name }}</td>
                        <td>{{ $us->email }}</td>
                        <td>
                            <a href="/create/{{ $us->id }}" class="btn btn-success">Edit</a>
                            <a href="/create/{{ $us->id }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">There are no data.</td>
                </tr>
            @endif
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $users->links() }}
    </div>
@endsection
