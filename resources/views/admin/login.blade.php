<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-color: #fbece6;">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Login</h3>
                                        <img src="{{ URL::asset('/uploads/logo/logo.jpeg') }}" alt="Logo" />
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('admin.check') }}" method="post">
                                            @if (Session::get('fail'))
                                                <div class="alert alert-danger">
                                                    {{ Session::get('fail') }}
                                                </div>
                                            @endif
                                            @csrf

                                            <div class="form-floating mb-3">
                                                 <label for="email">Email</label>
                                                 <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                                                 <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                             </div>
                                             <div class="form-floating mb-3">
                                                 <label for="password">Password</label>
                                                 <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                                                 <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                                             </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <a class="btn btn-primary" href="index.html">Login</a>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
    </body>
</html>
