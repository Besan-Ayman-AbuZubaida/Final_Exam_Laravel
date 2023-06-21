<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laravel</title>
</head>

<body>
    @guest
    <p>please sign in or sign up</p>
    <a href="#">Sign up</a>
    <a href="#">Log in</a>
    @endguest

    <h1>Users</h1>
    
    <div>
        <a href="{{ route('users.create') }}"> Create User</a>
    </div>
    
    @if ($message = Session::get('success'))
    <div>
        <p>{{ $message }}</p>
    </div>
    @endif
    <table border="1">
        <thead>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>User Address</th>
                <th>User Mobile</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->mobile }}</td>
                <td>
                    <form action="{{ route('users.destroy',$user->id) }}" method="Post">
                        <a href="{{ route('users.edit',$user->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>

</html>

</html>