<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="bWfwQXM3ctxrQqaIemecKt9VzuGh1hpKucB377En">

    <title>Zesco eRecruiter</title>

    <!-- Scripts -->
    <script src="https://pms.zesco.co.zm/js/app.js" defer=""></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://pms.zesco.co.zm/css/app.css" rel="stylesheet">
</head>
<body>
<div id="app" style="background-image: url(https://pms.zesco.co.zm/assets/img/background_6.jpg);
  background-size: cover; background-repeat: no-repeat">


    <main class="py-4">
            <div class="container h-100">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="col-md-4">


                <div class="card">

                    <div class="card-body">

                                                <div>
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <img src="https://pms.zesco.co.zm/assets/img/zesco_logo.png" alt="ZESCO Logo" style="height: 100px;">
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-4">
                                <label class="text-uppercase" style="font-size:13px;">Zesco eRecruiter</label>
                            </div>
                        </div>
                        <form method="POST" action="https://pms.zesco.co.zm/login">
                            <input type="hidden" name="_token" value="bWfwQXM3ctxrQqaIemecKt9VzuGh1hpKucB377En">                            <div class="form-group row">
                                <label for="man_no" class="col-md-12 col-form-label text-md-left">Man Number</label>
                                <div class="col-md-12">
                                    <input id="man_no" type="text" class="form-control " name="man_no" value="" required="" autocomplete="man_no" autofocus="">
                                                                    </div>
                            </div>
                            <div class="form-group row mb-3">
                                <label for="password" class="col-md-12 col-form-label text-md-left">Password</label>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input id="password" type="password" class="form-control " name="password" required="" autocomplete="current-password">
                                                                                <div id="togglePassword" title="Click here to make password visible/invisible" class="input-group-append toggle_password">
                                            <i id="showHidePasswordIcon" class="fa fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success btn-block">
                                        <i class="fa fa-paper-plane"></i>
                                        Login
                                    </button>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-12 pl-0">
                                                                            <a class="btn btn-link" href="https://pms.zesco.co.zm/password/reset">
                                            Forgot Your Password ?
                                        </a>
                                                                        <p class="pl-2 ml-1"><a class="btn btn-link" href="https://pms.zesco.co.zm/register">
                                            Don't have an account? Click here to Register </a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
</div>


</body></html>
