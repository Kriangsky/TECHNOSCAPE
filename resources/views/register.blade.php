<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>REGISTER</h1>
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    {{-- TADI FORM ACTIONNYA /register-post --}}
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="m-3">
            <label for="exampleInputEmail1" class="form-label">Group Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="Group_Name" value={{ old('Group_Name') }}>
            {{-- @foreach ($errors->all() as $error)
            <p style="color: red;">{{ $error }}</p>
          @endforeach --}}
            @error('Group_Name')
                <p style="color: red;">Group Name is required</p>
            @enderror
        </div>
        <div class="m-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="Name"value={{ old('Name') }}>
            @error('Name')
                <p style="color: red;">Name is required</p>
            @enderror
        </div>
        <div class="m-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="email" value={{ old('Email') }}>
            @error('Email')
                @if ($message == 'validation.required')
                    <p style="color: red;">Email is required</p>
                @elseif($message == 'validation.email')
                    <p style="color: red;">Invalid email format</p>
                @elseif($message == 'validation.unique')
                    <p style="color: red;">Email is already taken</p>
                @else
                    <p style="color: red;">{{ $message }}</p>
                @endif
            @enderror
        </div>
        <div class="m-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                value={{ old('Password') }}>
            @error('Password')
                <p style="color: red">Password must be atleast 8 characters with 1 Uppercase letter, 1 Lowercase letter, 1
                    symbol, and 1 number.</p>
            @enderror
        </div>
        <div class="m-3">
            <label for="exampleInputEmail1" class="form-label">Birth Date</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="Birth_Date" value={{ old('Birth_Date') }}>
            @error('Birth_Date')
                <p style="color: red;">Birth Date is required</p>
            @enderror
        </div>
        <div class="m-3">
            <label for="exampleInputEmail1" class="form-label">Line ID</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="Line_Id" value={{ old('Line_Id') }}>
            @error('Line_Id')
                <p style="color: red;">Line ID is required</p>
            @enderror
        </div>
        <div class="m-3">
            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="Phone_Number" value={{ old('Phone_Number') }}>
            @error('Phone_Number')
                <p style="color: red;">Phone Number is required</p>
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
