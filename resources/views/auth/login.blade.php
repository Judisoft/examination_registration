<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <title>ENSTP Login</title>
</head>

<body>
    <div class="body_wrapper frm-vh-md-100">
        <div class="formify_body" data-bg-color="#E3F0FF">
            <div class="f_content">
                <div class="container-fluid custom_container">
                    <div class="row">
                        <div class="col-lg-6 formify_content_left text-center">
                            <div class="formify_logo_wrapper">
                                <a href="index.html"><img src="assets/img/logo.png" alt=""></a>
                                <p>NATIONAL ADVANCED SCHOOL OF PUBLIC WORKS  <br> (NASPW)</p>
                                <p>COMPETITIVE ENTRANCE EXAMINATION</p>
                            </div>
                            <img class="img-fluid img" src="{{ asset('img/logo.PNG') }}" alt="">
                        </div>
                        <div class="col-lg-6 formify_content_right">
                            <div class="formify_box ml-auto mr-auto">
                                <h5 class="form_title">Login</h5>
                                <a href="#" class="btn btn-social btn-google"><img class="icon"
                                        src="{{ asset('img/google.png') }}" alt="">Login
                                    in with Google</a>
                                <div class="text-center">
                                    <span class="or-text">or</span>
                                </div>
                                <form action="{{ route('login') }}" method="POST" class="signup_form">
                                    @csrf
                                    <div class="form-group">
                                        <label class="input_title" for="inputEmail">Email</label>
                                        <input type="email" class="form-control" name="email" id="inputEmail"
                                            placeholder="Email address" >
                                    </div>
                                    <div class="form-group">
                                        <label class="input_title" for="inputPassword">Password</label>
                                        <input type="password" class="form-control" name="password" id="inputPassword"
                                            placeholder="Enter password" >
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn action_btn thm_btn">Sign in</button>
                                    </div>
                                    <p class="form_footer_text">Don't have have an account? <a href="{{ route('register') }}">Create account</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ asset('vendors/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>