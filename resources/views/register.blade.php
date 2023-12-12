<div id="app" style="background-image: url(https://pms.zesco.co.zm/assets/img/background_6.jpg);
  background-size: cover; background-repeat: no-repeat">






















































    <main class="py-4">
            <div class="container h-100">
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                                                <div>
                            <div class="d-flex align-items-center justify-content-center mb-2">
                                <img src="https://pms.zesco.co.zm/assets/img/zesco_logo.png" alt="ZESCO Logo" style="height: 100px;">
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-5">
                                <label class="text-uppercase" style="font-size:15px;">Performance Management
                                    System</label>

                            </div>
                        </div>
                        <form method="POST" action="https://pms.zesco.co.zm/register">
                            <input type="hidden" name="_token" value="sPMdIX0GVshFw67lzDVXHKZmogduWxOg2kk4n05k">                            <div class="row mb-3">
                                <label for="man_no" class="col-md-4 col-form-label text-md-end">MAN Number</label>
                                <div class="col-md-6">
                                    <input id="man_no" type="text" class="form-control " name="man_no">

                                                                    </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                                <div class="col-md-6">
                                    <input oninput="this.value = this.value.toUpperCase()" id="email" type="email" class="form-control " name="email" value="" required="" autocomplete="email">

                                                                    </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control " name="password" required="" autocomplete="new-password" aria-autocomplete="list">

                                                                    </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="" autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-block btn-success">
                                        Register
                                    </button>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <p class="pl-2 ml-1"><a class="btn btn-link" href="https://pms.zesco.co.zm/login">
                                            Already have an account? Click here to Login </a></p>
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
