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
    @if(session()->has('success'))
        <b style="color: green">
            {{ session()->get('success') }}
        </b>
    @endif
    <form action="{{ route('login.login') }}" method="post">
        @csrf
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
            <button type="submit">login</button>
        </div>
    </form>
</body>

</html>
