<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registered Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div style="margin: 50px">
        <div>
            @forelse ($dataRegis as $datas)
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <h3>{{ $datas->Group_Name}}</h3>
                    <h3>{{ $datas->Name}}</h3>
                    <h3>{{ $datas->Birth_Date}}</h3>
                    <h3>{{ $datas->Line_Id}}</h3>
                    <h3>{{ $datas->Phone_Number}}</h3>
                    
                    <br><br>
                </div>
            @empty
                <h3>Data is empty.</h3>
            @endforelse
        </div>
    </div>

<div style="margin: 50px">
    <form action="/data-post" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="exampleInputEmail1" class="form-label">Upload CV</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="CV" >
            @error('CV')
            <p style="color: red;">CV is required</p>
          @enderror
        </div>
        <div>
            <label for="exampleInputEmail1" class="form-label">Upload Transfer Evidence</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="Evidence">
            @error('Evidence')
            <p style="color: red;">Evidence is required</p>
          @enderror
        </div>
        <button type="submit" class="m-3 btn btn-primary">Submit</button>
      </form>
</div>
<button type="button" class="m-3 btn btn-outline-primary"><a href="/">Home</a></button>




      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
