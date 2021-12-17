@extends('Backend.home')
@Section('title')
Pro5 người dùng
@endsection
@Section('content')
<table class="table">
        <thread>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th><a href="create"><button type="button" class="btn btn-success">Chỉnh sửa</button></a></th>
            </tr>
        </thread>
        <tbody>
                <tr>
                    <td>{{ $users->id }}</td>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>
                    <!-- {{ config("user.role.".$users->role_id) }} -->
                    {{ $users->role->name }}
                    </td>
                </tr>  
        </tbody>
</table>

@endSection