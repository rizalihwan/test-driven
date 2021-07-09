<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        strong {
            color: red;
        }
    </style>
</head>

<body>
    <form action="{{ route('register.store') }}" method="post">
        @csrf
        <div>
            <label for="name">name</label>
            <input type="text" name="name" id="name">
            @error('name')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
            @error('email')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
            @error('password')
                <strong>{{ $message }}</strong>
            @enderror
        </div>     
        <div>
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
            @error('password_confirmation')
                <strong>{{ $message }}</strong>
            @enderror
        </div>                                                                                              
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
</body>

</html>
