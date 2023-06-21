<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add User Form</title>
</head>

<body>

    <h2>Add User</h2>
    <div>
        <a href="{{ route('users.index') }}"> Back</a>
    </div>

    @if(session('status'))
    <div>
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
                <div>
                    <b>User Name:</b>
                    <input type="text" name="name" placeholder="User Name">
                    @error('name')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                        
                <div>
                    <b>User Email:</b>
                    <input type="email" name="email" placeholder="User Email">
                    @error('email')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
            
                <div>
                    <b>User Address:</b>
                    <input type="text" name="address" placeholder="User Address">
                    @error('address')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <b>User Mobile:</b>
                    <input type="text" name="mobile" placeholder="User Mobile">
                    @error('mobile')
                    <div>{{ $message }}</div>
                    @enderror
                </div>
            
            <button type="submit">Submit</button>
        </div>
    </form>
    </div>
</body>

</html>