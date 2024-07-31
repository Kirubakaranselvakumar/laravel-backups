<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

</head>
<body>
    <div class="card mx-auto w-50 mt-5 p-5 p-3 mb-2 bg-info-subtle text-info-emphasis">
        <div class="card-body">
        <h2 class="card-header">Register</h2>
        <form method="POST" action="{{url('signup-data')}}" enctype="multipart/form-data">
            @csrf

            <p class="form-group form-label">
                <label >Firstname:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" >
                {{-- <span style = "color:red"><?php echo $firstnameError ?></span> --}}
            </p>

            <p class="form-group form-label">
                <label >Lastname:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" >
                {{-- <span style = "color:red"><?php echo $lastnameError ?></span> --}}
            </p>


            <p class="form-group form-label">
                <label>Email:</label>
                <input type="email" class="form-control" id="email" name="email" >
                {{-- <span style = "color:red"><?php echo $emailError ?></span> --}}
            </p>

            <p class="form-group form-label">
                <label >Mobile:</label>
                <input type="number" class="form-control" id="mobile" name="mobile">
                {{-- <span style = "color:red"><?php echo $mobileError ?></span> --}}
            </p>

            <p class="form-group form-label">
                <label >DOB:</label>
                <input type="date" class="form-control" id="dob" name="dob" >
                {{-- <span style = "color:red"><?php echo $dobError ?></span> --}}
            </p>

            <p class="form-group form-label">
                <label >Password:</label>
                <input type="password" class="form-control" id="password" name="password" >
                {{-- <span style = "color:red"><?php echo $passwordError ?></span> --}}
            </p>

            <p class="form-group">
                <button class="btn btn-success" name="submit" type="submit">Register</button>
            </p>
        </form>
</div>
</div>
</body>
</html>
