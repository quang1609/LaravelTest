@foreach($paginator as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
        {{ config("user.role.".$user->role_id) }}
        </td>
        <td>
            <input type="checkbox" data-id="{{ $user->id }}" name="active" class="js-switch" {{ $user->active == 0 ? 'checked' : '' }}>
        </td>
    </tr>
@endforeach
