<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit User  </title>
</head>

<body>
    <div>
        <h2>Edit User</h2>
    </div>
    <div>
        <a href="{{ route('users.index') }}" enctype="multipart/form-data">
            Back</a>
    </div>
   
    @if(session('status'))
    <div>
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('users.update',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <b>User Name:</b>
            <input type="text" name="name" value="{{ $user->name }}" placeholder=" User name">
            @error('name')
            <div>{{ $message }}</div>
            @enderror
        </div>


        <div>
            <b>User Email:</b>
            <input type="email" name="email" placeholder="User Email" value="{{ $user->email }}">
            @error('email')
            <div>{{ $message }}</div>
            @enderror
        </div>

        
            <div>
                <b>User Address:</b>
                <input type="text" name="address" value="{{ $user->address }}" placeholder="User Address">
                @error('address')
                <div>{{ $message }}</div>
                @enderror
            </div>
            <div>
                <b>User Mobile:</b>
                <input type="text" name="address" value="{{ $user->mobile }}" placeholder="User Mobile">
                @error('mobile')
                <div>{{ $message }}</div>
                @enderror
            </div>


        <button type="submit">Submit</button>
    </form>
</body>

</html>