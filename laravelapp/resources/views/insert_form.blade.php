{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

</head>
<body>
    <div class="card mx-auto w-50 mt-5 p-5 shadow p-3 mb-5 bg-body-tertiary rounded" >
        <div class="card-body">
            @if(session('status')){
                <h4 >{{session('status')}}</h4>
            }
@endif
        <h2 class="card-header">Login</h2>
        <form method="POST" action="{{url('dashboard')}}" >
            @csrf
            <div class="form-group form-label">
                <label for="username ">Username:</label>
                <input type="text" class="form-control" id="username" name="username" >
            </div>
            <div class="form-group form-label">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" >
            </div>
            <div class="form-group form-label ">
                <button class="btn btn-primary" type="submit" name="submit">Login</button>


                <a class="btn btn-warning float-end" href="{{url('signup')}}">Signup</a>
            </div>
        </form>
    </div>
</div>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

</head>
<body>
    <div class="card mx-auto w-50 mt-5 p-5 shadow p-3 mb-5 bg-body-tertiary rounded" >
        <div class="card-body">
            @if(session('status'))
                <h4>{{session('status')}}</h4>
            @endif
            <h2 class="card-header">Login</h2>
            <form method="POST" action="{{url('home')}}" >
                @csrf
                <div class="form-group form-label">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group form-label">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group form-label ">
                    <button class="btn btn-primary" type="submit" name="submit">Login</button>
                    <a class="btn btn-warning float-end" href="{{url('signup')}}">Signup</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

