<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="w-50 border shadow-lg rounded-3 p-5 mx-auto mt-5">

    <h1 >ADD DATA</h1>

<form action="{{route('user.submit')}}" method="POST" class="">
    @csrf
    <div>
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{old('name')}}" id=username placeholder="Name" class="form-control @error('name') is-invalid  @enderror">
    @error('name')
    <p class="invalid-feedback">{{$message}}</p>
@enderror 
    </div>
    <div>
    <label for="email">Email:</label>
    <input type="text" name="email" value="{{old('email')}}" id=useremail placeholder="E-mail" class="form-control @error('email') is-invalid  @enderror">
    @error('email')
    <p class="invalid-feedback">{{$message}}</p>
@enderror 
    </div>
    <div>
    <label for="contact">Contact:</label>
    <input type="text" name="email" value="{{old('contact')}}" id=usercontact placeholder="Contact" class="form-control @error('email') is-invalid  @enderror">
    @error('contact')
    <p class="invalid-feedback">{{$message}}</p>
@enderror 
    </div>
    <div>
    <label for="image">Images:</label>
    <input required type="file" class="form-control" name="images[]" placeholder="image" > 
    </div>
    <button class="btn btn-primary mt-3 w-100" type="submit"> Add data </button>
   
</form>
    <div><p><a href="">already have an account?</a></p></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>