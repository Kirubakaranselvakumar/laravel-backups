<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>register</title>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
            <div class="col-md-6 rounded-4 d-fex left-box justify-content-center align-item-center flex-colum"
                style="background:#103cbe">
                <div class="featured-image mb-3">
                    <img src="{{ asset('1.jpg') }}" class="img-fluid mt-3" style="width:fit-content;"
                        alt="">
                </div>
                <p class="text-white fs-2" style="font-weight:600"> Be verified</p>
                <small class="text-white text-wrap text-center mb-5">Join experienced Designers on this
                    Industry.</small>
            </div>
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hello, again</h2>
                        <p>We are happpy to have you back</p>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6"
                            placeholder="Email address">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6"
                            placeholder="password">
                    </div>

                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" id="form-check" class="form-check-input">
                            <label for="form-check" class="form-check-label text-seconary"> <small>remember me</small>
                            </label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">forgot password</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6"> Login</button>

                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="{{ asset('icon.png') }}" alt="" style="width:30px"> <small>Signin with google</small> </button>
                    </div>
                    <div class="row">
                        <small class="mx-auto" style="width:fit-content">
                            Don't have account <a href="#">Sign up</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
