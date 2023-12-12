<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZESCO USER ACCESS REVIEW  | Dashboard</title>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet"
          href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css?v=3.2.0')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">

    <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.min.css')}}">
    <script nonce="1215ee1b-49de-4eec-8e01-d5f5765a1708">(function (w, d) {
            !function (bb, bc, bd, be) {
                bb[bd] = bb[bd] || {};
                bb[bd].executed = [];
                bb.zaraz = {deferred: [], listeners: []};
                bb.zaraz.q = [];
                bb.zaraz._f = function (bf) {
                    return async function () {
                        var bg = Array.prototype.slice.call(arguments);
                        bb.zaraz.q.push({m: bf, a: bg})
                    }
                };
                for (const bh of ["track", "set", "debug"]) bb.zaraz[bh] = bb.zaraz._f(bh);
                bb.zaraz.init = () => {
                    var bi = bc.getElementsByTagName(be)[0], bj = bc.createElement(be),
                        bk = bc.getElementsByTagName("title")[0];
                    bk && (bb[bd].t = bc.getElementsByTagName("title")[0].text);
                    bb[bd].x = Math.random();
                    bb[bd].w = bb.screen.width;
                    bb[bd].h = bb.screen.height;
                    bb[bd].j = bb.innerHeight;
                    bb[bd].e = bb.innerWidth;
                    bb[bd].l = bb.location.href;
                    bb[bd].r = bc.referrer;
                    bb[bd].k = bb.screen.colorDepth;
                    bb[bd].n = bc.characterSet;
                    bb[bd].o = (new Date).getTimezoneOffset();
                    if (bb.dataLayer) for (const bo of Object.entries(Object.entries(dataLayer).reduce(((bp, bq) => ({...bp[1], ...bq[1]})), {}))) zaraz.set(bo[0], bo[1], {scope: "page"});
                    bb[bd].q = [];
                    for (; bb.zaraz.q.length;) {
                        const br = bb.zaraz.q.shift();
                        bb[bd].q.push(br)
                    }
                    bj.defer = !0;
                    for (const bs of [localStorage, sessionStorage]) Object.keys(bs || {}).filter((bu => bu.startsWith("_zaraz_"))).forEach((bt => {
                        try {
                            bb[bd]["z_" + bt.slice(7)] = JSON.parse(bs.getItem(bt))
                        } catch {
                            bb[bd]["z_" + bt.slice(7)] = bs.getItem(bt)
                        }
                    }));
                    bj.referrerPolicy = "origin";
                    bj.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(bb[bd])));
                    bi.parentNode.insertBefore(bj, bi)
                };
                ["complete", "interactive"].includes(bc.readyState) ? zaraz.init() : bb.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);</script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



    @include('layouts.nav')


    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="index3.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        @include('layouts.sidebar')

    </aside>

    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">System Users</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="-">Home</a></li>
                            <li class="breadcrumb-item active">JOBS</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><div class="row">
            <!-- / start page section --><div class="col-md-2">
                <!-- / start info box --><div class="card pull-up"><div class="card-content">
                    <div class="card-body"><div class="media d-flex"><div class="media-body text-left">
                        <h3 class="primary">0</h3>
                        <h6>Work Experience</h6></div><div><i class="la la-briefcase  float-right"></i></div></div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2"><div class="progress-bar bg-gradient-green" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div></div></div></div></div><!-- / end info box-->
            </div><!-- / end  page section-->
            <!-- / start page section --><div class="col-md-2">
                <!-- / start info box --><div class="card pull-up"><div class="card-content">
                    <div class="card-body"><div class="media d-flex"><div class="media-body text-left">
                        <h3 class="primary">0</h3>
                        <h6>Work Experience</h6></div><div><i class="la la-briefcase  float-right"></i></div></div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2"><div class="progress-bar bg-gradient-green" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div></div></div></div></div><!-- / end info box-->
            </div><!-- / end  page section-->
            <!-- / start page section --><div class="col-md-2">
                <!-- / start info box --><div class="card pull-up">
                    <div class="card-content"><div class="card-body">
                        <div class="media d-flex"><div class="media-body text-left">
                            <h3 class="success">0</h3><h6>Education</h6></div>
                            <div><i class="la la-graduation-cap success font-large-2 float-right"></i></div>
                        </div>
                        <div class="progress progress-sm mt-1 mb-0 box-shadow-2"><div class="progress-bar bg-gradient-green" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                        </div></div></div></div></div><!-- / end info box-->
            </div><!-- / end  page section-->
            <!-- / start page section --><div class="col-md-2">
                <!-- / start info box --><div class="card pull-up"><div class="card-content"><div class="card-body"><div class="media d-flex"><div class="media-body text-left"><h3 class="warning">3</h3>
                    <h6>Memberships</h6></div><div><i class="la la-certificate warning font-large-2 float-right"></i></div></div><div class="progress progress-sm mt-1 mb-0 box-shadow-2"><div class="progress-bar bg-gradient-green" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div></div></div></div></div><!-- / end info box-->
            </div><!-- / end  page section-->
            <!-- / start page section --><div class="col-md-2">
                <!-- / start info box --><div class="card pull-up">
                    <div class="card-content"><div class="card-body">
                        <div class="media d-flex"><div class="media-body text-left">
                            <h3 class="danger">4</h3><h6>Awards</h6></div><div><i class="la la-flag-checkered danger font-large-2 float-right"></i></div></div><div class="progress progress-sm mt-1 mb-0 box-shadow-2"><div class="progress-bar bg-gradient-green" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div></div></div></div></div><!-- / end info box-->
            </div><!-- / end  page section-->
            <!-- / start page section --><div class="col-md-2">
                <!-- / start info box --><div class="card pull-up"><div class="card-content"><div class="card-body"><div class="media d-flex"><div class="media-body text-left"><h3 class="secondary">2</h3><h6>Skills</h6></div><div><i class="la la-list-alt secondary font-large-2 float-right"></i></div></div><div class="progress progress-sm mt-1 mb-0 box-shadow-2"><div class="progress-bar bg-gradient-green" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div></div></div></div></div><!-- / end info box-->
            </div><!-- / end  page section-->
            <!-- / start page section -->
        </div>


    </div>
</section>
    @include('layouts.footer')





<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>



<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>

<script src="{{asset('adminlte/plugins/sparklines/sparkline.js')}}"></script>

<script src="{{asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>

<script src="{{asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>

<script src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<script src="{{asset('adminlte/dist/js/adminlte.js?v=3.2.0')}}"></script>

<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>

<script src="{{asset('adminlte/dist/js/pages/dashboard.js')}}"></script>
</body>
</html>
