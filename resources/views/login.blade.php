<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>LOGIN</h1>

    {{-- ini tadi
    <form action="/login-post" method="POST"> --}}
    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="m-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="email" value={{ old('Email') }}>
            @error('Email')
                <p style="color: red;">Email is required</p>
            @enderror
        </div>
        <div class="m-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                value={{ old('Password') }}>
            @error('Password')
                <p style="color: red;">Password is required</p>
            @enderror
        </div>
        <button type="submit" class="m-3 btn btn-primary">Submit</button>
    </form>
    <button type="button" class="m-3 btn btn-outline-primary"><a href="/">Back</a></button>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
