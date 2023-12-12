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
                        <h1 class="m-0 text-bold">Work Exprience</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="-">Home</a></li>
                            <li class="breadcrumb-item active">JOBS</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div><div class="row"><div class="card-body">
            <script id="dxss_1594992262" type="text/javascript" data-executed="true">
<!--
var ASPx,dx,DevExpress;!function n(t,o,e,r,i,a,c){var u=[],l=[],d=0,f=[],s=[],h=!1;function C(n,r,i){n[i]=function(){r(t,o,e)}}function v(){return r==d}function m(){return!0}function E(n){return function(){throw new Error(n)}}function x(n){n()}var S=-1;function b(n,t,o,e){var r=++S;return function(){i(function(){r==S&&o()&&(S--,function(n){for(var t=n.length,o=0,e=null;(e=n[o])&&o<t;o++)e&&e();n.length=0}(t),e())})}}var p=b(0,f,function(){return h&&v()},function(){t.attachToReady=x}),T=b(0,s,m,function(){t.attachToLoad=x,p()}),w=b(0,l,m,function(){t.SS=function(n){n(t,o,e)},T()}),A=b(0,u,v,function(){t.IS=E("Too late"),w()}),y=0;t.SS=function(n){var t=y++;i(function(){C(l,n,t)})};var P=0;t.IS=function(n,t){i(function(){for(C(u,n,t),d++;P<d&&u[P];)u[P]=u[P]()&&null,P++;A()})},t.attachToReady=f.push.bind(f),t.attachToLoad=s.push.bind(s),t.initResourceLoader=n,c.addEventListener("DOMContentLoaded",function(){r=c.querySelectorAll("script[id^=dxis_][defer]").length,A()}),a.addEventListener("load",function(){h=!0,p()});var L=["BeginCallback","BrowserWindowResized","CallbackError","ControlsInitialized","EndCallback","ValidationCompleted"],B=["ForEachControl","Get","GetByName","GetControlsByPredicate","GetControlsByType"],G=[];var g=L.reduce(function(n,t){return((n[t]={}).AddHandler=function(n){G.push({e:t,h:n})})&&n},{});g=B.reduce(function(n,t){return(n[t]=E("The environment has not been initialized. To access the "+t+" member, call the member from the ControlsInitialized event's handler."))&&n},g),t.loadControlCollectionPreloadHandlers=function(n){G.forEach(function(t){n[t.e].AddHandler(t.h)}),L.forEach(function(t){g[t]=n[t]}),B.forEach(function(t){g[t]=n[t].bind(n)}),t.loadControlCollectionPreloadHandlers=G=g=null},a.ASPxClientControl={GetControlCollection:function(){return g}}}(ASPx||(ASPx={}),dx||(dx={}),DevExpress||(DevExpress={}),-1,window.requestAnimationFrame||setTimeout,window,document);

//-->
</script><script id="dxis_910514559" src="/DXR.axd?r=1_9-56rfr" type="text/javascript"></script><script id="dxis_687493367" src="/DXR.axd?r=1_10,1_253,1_21-56rfr&amp;order=0" type="text/javascript" defer=""></script><script id="dxis_796950092" src="/DXR.axd?r=1_62-56rfr" type="text/javascript"></script><script id="dxis_806203644" src="/DXR.axd?r=1_12,1_13,1_47,1_58,23_0,23_1,23_32,1_181,1_182,23_30,1_19,1_20,1_188,1_190,1_15,23_39,1_192,23_38,1_184,1_191,23_35,23_37,1_180,23_31,1_200,1_17,1_211,1_224,1_225,1_226,1_209,1_228,1_237,1_239,1_240,1_230,1_231,1_235,1_241,23_11,23_12,23_18,23_15-96rfr&amp;order=1" type="text/javascript" defer=""></script><table class="dxlpLoadingPanel_iOS dxlpControl_iOS" cellspacing="0" cellpadding="0" id="ctl00_PageContent_ctl01_loadingMain" style="border-collapse:collapse;position:absolute;left:0px;top:0px;z-index:30000;display:none;">
<tbody><tr>
    <td class="dx" style="padding-right:0px;"><img class="dxlp-loadingImage dxlp-imgPosLeft" src="/DXR.axd?r=1_87-56rfr" alt="" align="middle"></td><td class="dx" style="padding-left:0px;"><span id="ctl00_PageContent_ctl01_loadingMain_TL">Processing... Please Wait</span></td>
</tr>
</tbody></table><div id="ctl00_PageContent_ctl01_loadingMain_LD" class="dxlpLoadingDiv_iOS dxlpControl_iOS dx-ft" style="left:0px;top:0px;z-index:29999;display:none;position:absolute;">

</div><script id="dxss_549227215" type="text/javascript" data-executed="true">
<!--
ASPx.SS(function(ASPx, dx) {
ASPx.FillDocumentElementDXThemeCssClassName("iOS");
ASPx.createControl(ASPxClientLoadingPanel,'ctl00_PageContent_ctl01_loadingMain','loadingPanel',{'uniqueID':'ctl00$PageContent$ctl01$loadingMain'});

});
//-->
</script>

            <div id="ctl00_PageContent_ctl01_UpdatePanelMain">





                    <div class="dxbs-fl" id="ctl00_PageContent_ctl01_blayoutMain">
    <div class="row dxbs-fl-gr">
        <div id="ctl00_PageContent_ctl01_blayoutMain_0" class="dxbs-fl-gd col-md-12">
            <div class="card">
                <div class="card-header">
                    Add Work Experience
                </div><div class="row">
                    <div id="ctl00_PageContent_ctl01_blayoutMain_0_0" class="col-md-4">
                        <div class="form-group">
                            <label class="col-form-label dxbs-fl-cpt"></label><div class="dxbs-fl-ctrl">

                                                <!-- / start layout --><div class="form-group">
                                                    <div class="dxbs-textbox WEXP_ORGANISATION" id="ctl00_PageContent_ctl01_blayoutMain_txtOrganisation">
                                    <div>
                                        <input id="ctl00_PageContent_ctl01_blayoutMain_txtOrganisation_I" class="form-control text-muted" type="text" name="ctl00$PageContent$ctl01$blayoutMain$txtOrganisation" value="Organisation" maxlength="200" savedspellcheck="[object Object]" spellcheck="false" autocomplete="off" placeholder="Organisation">
                                    </div>
                                </div>
                                                </div><!-- / end layout-->

                            </div>
                        </div>
                    </div><div id="ctl00_PageContent_ctl01_blayoutMain_0_1" class="col-md-4">
                        <div class="form-group">
                            <label class="col-form-label dxbs-fl-cpt"></label><div class="dxbs-fl-ctrl">

                                                <!-- / start layout --><div class="form-group">
                                                    <div class="dxbs-textbox WEXP_POSITION" id="ctl00_PageContent_ctl01_blayoutMain_txtPosition">
                                    <div>
                                        <input id="ctl00_PageContent_ctl01_blayoutMain_txtPosition_I" class="form-control text-muted" type="text" name="ctl00$PageContent$ctl01$blayoutMain$txtPosition" value="Position" maxlength="100" savedspellcheck="[object Object]" spellcheck="false" autocomplete="off">
                                    </div>
                                </div>
                                                </div><!-- / end layout-->

                            </div>
                        </div>
                    </div><div id="ctl00_PageContent_ctl01_blayoutMain_0_2" class="col-md-4">
                        <div class="form-group">
                            <label class="col-form-label dxbs-fl-cpt">Start Date:</label><div class="dxbs-fl-ctrl">

                                                <!-- / start layout --><div class="form-group">
                                                    <script id="dxss_784009016" type="text/javascript" data-executed="true">
<!--
ASPx.SS(function(ASPx, dx) {
(function(){
var a = {'is12HoursCulture':true,'numPosInf':'∞','numNegInf':'-∞'};
for(var b in a) ASPx.CultureInfo[b] = a[b];
})();


});
//-->
</script><div class="dxbs-dropdown-edit dxbs-date-edit WEXP_STARTDATE" id="ctl00_PageContent_ctl01_blayoutMain_dteStartDate">
                                    <div class="input-group">
                                        <div class="dxbs-input-cntr">
                                            <input id="ctl00_PageContent_ctl01_blayoutMain_dteStartDate_I" class="form-control text-muted" type="text" name="ctl00$PageContent$ctl01$blayoutMain$dteStartDate" value="Start Date" autocomplete="off" savedspellcheck="[object Object]" spellcheck="false"><span></span>
                                        </div><div class="input-group-append">
                                            <span class="dxbs-edit-btn btn btn-secondary dropdown-toggle" data-toggle="dropdown-show"></span><div class="dxbs-dm dropdown-menu dxbs-dropdown-area" style="left: 0px; top: 41px;">
                                                <div class="dxbs-calendar" id="ctl00_PageContent_ctl01_blayoutMain_dteStartDate_C">
                                                    <div class="calendar-row">
                                                        <div class="calendar-view card">
                                                            <div class="card-header btn-group">
                                                                <span id="ctl00_PageContent_ctl01_blayoutMain_dteStartDate_C_PYC" class="btn"><span class="dxbs-icon dxbs-icon-backward"></span></span><span id="ctl00_PageContent_ctl01_blayoutMain_dteStartDate_C_PTPC" class="d-none btn"><span class="dxbs-icon dxbs-icon-angle-left"></span></span><span id="ctl00_PageContent_ctl01_blayoutMain_dteStartDate_C_PMC" class="btn"><span class="dxbs-icon dxbs-icon-angle-left"></span></span><span id="ctl00_PageContent_ctl01_blayoutMain_dteStartDate_C_TC" class="dxbs-month-title btn" style="cursor: pointer;">December 2023</span><span id="ctl00_PageContent_ctl01_blayoutMain_dteStartDate_C_NMC" class="btn"><span class="dxbs-icon dxbs-icon-angle-right"></span></span><span id="ctl00_PageContent_ctl01_blayoutMain_dteStartDate_C_NTPC" class="d-none btn"><span class="dxbs-icon dxbs-icon-angle-right"></span></span><span id="ctl00_PageContent_ctl01_blayoutMain_dteStartDate_C_NYC" class="btn"><span class="dxbs-icon dxbs-icon-forward"></span></span>
                                                            </div><div class="card-body">
                                                                <table class="dxbs-month-table table table-sm table-bordered">
                                                                    <tbody><tr class="text-center">
                                                                        <td></td><th class="dxbs-calendar-dow">Sun</th><th class="dxbs-calendar-dow">Mon</th><th class="dxbs-calendar-dow">Tue</th><th class="dxbs-calendar-dow">Wed</th><th class="dxbs-calendar-dow">Thu</th><th class="dxbs-calendar-dow">Fri</th><th class="dxbs-calendar-dow">Sat</th>
                                                                    </tr><tr class="text-center">
                                                                        <td class="text-right"><small>48</small></td><td class="dxbs-day dxbs-other-month text-muted" style=""><a>26</a></td><td class="dxbs-day dxbs-other-month text-muted" style=""><a>27</a></td><td class="dxbs-day dxbs-other-month text-muted" style=""><a>28</a></td><td class="dxbs-day dxbs-other-month text-muted" style=""><a>29</a></td><td class="dxbs-day dxbs-other-month text-muted" style=""><a>30</a></td><td class="dxbs-day" style=""><a>1</a></td><td class="dxbs-day dxbs-weekend text-danger" style=""><a>2</a></td>
                                                                    </tr><tr class="text-center">
                                                                        <td class="text-right"><small>49</small></td><td class="dxbs-day dxbs-weekend text-danger" style=""><a>3</a></td><td class="dxbs-day" style=""><a>4</a></td><td class="dxbs-day" style=""><a>5</a></td><td class="dxbs-day" style=""><a>6</a></td><td class="dxbs-day" style=""><a>7</a></td><td class="dxbs-day" style=""><a>8</a></td><td class="dxbs-day dxbs-weekend text-danger" style=""><a>9</a></td>
                                                                    </tr><tr class="text-center">
                                                                        <td class="text-right"><small>50</small></td><td class="dxbs-day dxbs-weekend text-danger" style=""><a>10</a></td><td class="dxbs-day" style=""><a>11</a></td><td class="dxbs-day dxbs-today" style=""><a>12</a></td><td class="dxbs-day" style=""><a>13</a></td><td class="dxbs-day" style=""><a>14</a></td><td class="dxbs-day" style=""><a>15</a></td><td class="dxbs-day dxbs-weekend text-danger" style=""><a>16</a></td>
                                                                    </tr><tr class="text-center">
                                                                        <td class="text-right"><small>51</small></td><td class="dxbs-day dxbs-weekend text-danger" style=""><a>17</a></td><td class="dxbs-day" style=""><a>18</a></td><td class="dxbs-day" style=""><a>19</a></td><td class="dxbs-day" style=""><a>20</a></td><td class="dxbs-day" style=""><a>21</a></td><td class="dxbs-day" style=""><a>22</a></td><td class="dxbs-day dxbs-weekend text-danger" style=""><a>23</a></td>
                                                                    </tr><tr class="text-center">
                                                                        <td class="text-right"><small>52</small></td><td class="dxbs-day dxbs-weekend text-danger" style=""><a>24</a></td><td class="dxbs-day" style=""><a>25</a></td><td class="dxbs-day" style=""><a>26</a></td><td class="dxbs-day" style=""><a>27</a></td><td class="dxbs-day" style=""><a>28</a></td><td class="dxbs-day" style=""><a>29</a></td><td class="dxbs-day dxbs-weekend text-danger" style=""><a>30</a></td>
                                                                    </tr><tr class="text-center">
                                                                        <td class="text-right"><small>01</small></td><td class="dxbs-day dxbs-weekend text-danger" style=""><a>31</a></td><td class="dxbs-day dxbs-other-month text-muted" style=""><a>1</a></td><td class="dxbs-day dxbs-other-month text-muted" style=""><a>2</a></td><td class="dxbs-day dxbs-other-month text-muted" style=""><a>3</a></td><td class="dxbs-day dxbs-other-month text-muted" style=""><a>4</a></td><td class="dxbs-day dxbs-other-month text-muted" style=""><a>5</a></td><td class="dxbs-day dxbs-other-month text-muted" style=""><a>6</a></td>
                                                                    </tr>
                                                                </tbody></table>
                                                            </div><div id="ctl00_PageContent_ctl01_blayoutMain_dteStartDate_C_yc" class="d-none">
                                                                <div id="ctl00_PageContent_ctl01_blayoutMain_dteStartDate_C_yt" class="dxbs-fast-nav">
                                                                    <div class="card-body">
                                                                        <table id="ctl00_PageContent_ctl01_blayoutMain_dteStartDate_C_yt_n" class="table table-sm table-bordered" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
                                                                            <tbody><tr>
                                                                                <td class="dxbs-fast-nav-item text-muted">Jan</td><td class="dxbs-fast-nav-item text-muted">Feb</td><td class="dxbs-fast-nav-item text-muted">Mar</td><td class="dxbs-fast-nav-item text-muted">Apr</td>
                                                                            </tr><tr>
                                                                                <td class="dxbs-fast-nav-item text-muted">May</td><td class="dxbs-fast-nav-item text-muted">Jun</td><td class="dxbs-fast-nav-item text-muted">Jul</td><td class="dxbs-fast-nav-item text-muted">Aug</td>
                                                                            </tr><tr>
                                                                                <td class="dxbs-fast-nav-item text-muted">Sep</td><td class="dxbs-fast-nav-item text-muted">Oct</td><td class="dxbs-fast-nav-item text-muted">Nov</td><td class="dxbs-fast-nav-item">Dec</td>
                                                                            </tr>
                                                                        </tbody></table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><div class="btn-toolbar card-footer">
                                                        <span id="ctl00_PageContent_ctl01_blayoutMain_dteStartDate_C_BT" class="btn btn-secondary">Today</span><span id="ctl00_PageContent_ctl01_blayoutMain_dteStartDate_C_BC" class="btn btn-secondary">Clear</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                </div><!-- / end layout-->

                            </div>
                        </div>
                    </div><div id="ctl00_PageContent_ctl01_blayoutMain_0_3" class="col-md-4">
                        <div class="form-group">
                            <label class="col-form-label dxbs-fl-cpt">You still work here?:</label><div class="dxbs-fl-ctrl">

                                                <!-- / start layout --><div class="form-group">
                                                    <div class="dxbs-dropdown-edit dxbs-combobox WEXP_CURRENT" id="ctl00_PageContent_ctl01_blayoutMain_cboCurrent">
                                    <div class="input-group">
                                        <div class="dxbs-input-cntr">
                                            <input id="ctl00_PageContent_ctl01_blayoutMain_cboCurrent_I" class="form-control text-muted" type="text" name="ctl00$PageContent$ctl01$blayoutMain$cboCurrent" value="Current" autocomplete="off" savedspellcheck="[object Object]" spellcheck="false"><span></span>
                                        </div><div class="input-group-append">
                                            <span class="dxbs-edit-btn btn btn-secondary dropdown-toggle" data-toggle="dropdown-show"></span><div class="dxbs-listbox dxbs-dropdown-area dxbs-dm dropdown-menu dx-dropdown-menu" id="ctl00_PageContent_ctl01_blayoutMain_cboCurrent_L" style="left: 0px; top: 41px; width: 472px;">
                                                <ul class="list-group" style="height: 64.375px;"><li id="ctl00_PageContent_ctl01_blayoutMain_cboCurrent_LVirtualScrollTopSpacer" data-type="spacer" style="height: 0px; display: none;"></li>

                                                <li id="ctl00_PageContent_ctl01_blayoutMain_cboCurrent_L_LBI0"><a class="dropdown-item" id="ctl00_PageContent_ctl01_blayoutMain_cboCurrent_L_LBI0LBL" href="javascript:;"><span>No</span></a></li><li id="ctl00_PageContent_ctl01_blayoutMain_cboCurrent_L_LBI1"><a class="dropdown-item" id="ctl00_PageContent_ctl01_blayoutMain_cboCurrent_L_LBI1LBL" href="javascript:;"><span>Yes</span></a></li><li id="ctl00_PageContent_ctl01_blayoutMain_cboCurrent_LVirtualScrollBottomSpacer" data-type="spacer" style="height: 0px; display: none;"></li></ul><input type="hidden" name="ctl00$PageContent$ctl01$blayoutMain$cboCurrent$L" id="ctl00_PageContent_ctl01_blayoutMain_cboCurrent_L_VI" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div><input type="hidden" name="ctl00_PageContent_ctl01_blayoutMain_cboCurrent_VI" id="ctl00_PageContent_ctl01_blayoutMain_cboCurrent_VI" value="">
                                                </div><!-- / end layout-->

                            </div>
                        </div>
                    </div><div id="ctl00_PageContent_ctl01_blayoutMain_0_5" class="col-md-12">
                        <div class="form-group">
                            <label class="col-form-label dxbs-fl-cpt">Duties / Responsibilities:</label><div class="dxbs-fl-ctrl">

                                                <!-- / start layout --><div class="form-group">
                                                    <div class="dxbs-memo WEXP_DUTIES" id="ctl00_PageContent_ctl01_blayoutMain_txtDutieResponsibilitiess">
                                    <div>
                                        <textarea id="ctl00_PageContent_ctl01_blayoutMain_txtDutieResponsibilitiess_I" class="form-control text-muted" cols="" rows="10" name="ctl00$PageContent$ctl01$blayoutMain$txtDutieResponsibilitiess" savedspellcheck="[object Object]" spellcheck="false" autocomplete="off">Duties / Responsibilities</textarea>
                                    </div>
                                </div>
                                                </div><!-- / end layout-->

                            </div>
                        </div>
                    </div><div id="ctl00_PageContent_ctl01_blayoutMain_0_6" class="col-md-4">
                        <div class="form-group">
                            <div class="dxbs-fl-ctrl dxbs-fl-ctrl-nc">


                                                <!-- / start layout --><div class="form-group">
                                                    <button class="btn btn-success dxbs-button" id="ctl00_PageContent_ctl01_blayoutMain_btnAdd" type="submit" name="ctl00$PageContent$ctl01$blayoutMain$btnAdd" value="Add Work Experience">Add Work Experience<span class="badge badge-orange"><span class="ft-plus image">
                                                        </span>
                                                    </span>
                                                </button>
                                                </div><!-- / end layout-->



                            </div>
                        </div>
                    </div><div id="ctl00_PageContent_ctl01_blayoutMain_0_7" class="col-md-12">
                        <div class="form-group">
                            <div class="dxbs-fl-ctrl dxbs-fl-ctrl-nc">

                                                <!-- / start layout --><div class="form-group">


                                                    <!-- / start layout --><div class="form-group">

                                                        <table class="dxvsValidationSummary_iOS summaryIndent" cellspacing="0" cellpadding="0" id="ctl00_PageContent_ctl01_blayoutMain_vsValidationSummary1" style="width: 100%; border-collapse: collapse; display: none;">
                                    <tbody><tr>
                                        <td class="dxvsRC_iOS summaryIndent"><table class="dxvsT_iOS" cellspacing="0" cellpadding="0" style="width:100%;border-collapse:collapse;border-collapse:separate;">
                                            <tbody>
                                        </tbody></table></td>
                                    </tr>
                                </tbody></table><script id="dxss_511948016" type="text/javascript" data-executed="true">
<!--
ASPx.SS(function(ASPx, dx) {
ASPx.createControl(ASPxClientValidationSummary,'ctl00_PageContent_ctl01_blayoutMain_vsValidationSummary1','validationSummary',{'uniqueID':'ctl00$PageContent$ctl01$blayoutMain$vsValidationSummary1','validationGroup':'Application','sampleErrorContainer':'<tr class="dxvsE_iOS"> <td class="dxvsETC_iOS"><a class="dxvsHL_iOS" href="javascript:;">&nbsp;</a></td></tr>'});

});
//-->
</script>

                                                    </div><!-- / end layout-->


                                                </div><!-- / end layout-->

                            </div>
                        </div>
                    </div><div id="ctl00_PageContent_ctl01_blayoutMain_0_8" class="col-md-12">
                        <div class="form-group">
                            <label class="col-form-label dxbs-fl-cpt">Current Work Experience:</label><div class="dxbs-fl-ctrl">

                                                <script id="dxss_1685776902" type="text/javascript" data-executed="true">
<!--
ASPx.SS(function(ASPx, dx) {
ASPx.AccessibilitySR.DefaultCallbackMessage = 'Callback in process.';

});
//-->
</script><div class="dxbs-gridview dxgvAdD" id="ctl00_PageContent_ctl01_blayoutMain_ListGrid">
                                    <div class="card">
                                        <div id="ctl00_PageContent_ctl01_blayoutMain_ListGrid_DXAHeaderPanel" class="card-body dxbs-ap" style="display:none;">
                                            <div id="ctl00_PageContent_ctl01_blayoutMain_ListGrid_DXADHeader" class="dxgvADH" style="display:none;">
                                                <div class="card dxbs-th">
                                                    <div class="card-body">

                                                    </div>
                                                </div>
                                            </div>
                                        </div><table id="ctl00_PageContent_ctl01_blayoutMain_ListGrid_DXMainTable" class="dxbs-table table table-bordered table-sm" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
                                            <thead>
                                                <tr id="ctl00_PageContent_ctl01_blayoutMain_ListGrid_DXHeadersRow0">
                                                    <th id="ctl00_PageContent_ctl01_blayoutMain_ListGrid_col0" class="dxbs-cmd-cell" scope="col"><div class="dxbs-fixed-header-content">
                                                        <span>#</span>
                                                    </div></th><th id="ctl00_PageContent_ctl01_blayoutMain_ListGrid_col2" scope="col"><div class="dxbs-fixed-header-content">
                                                        <a data-toggle="gridview-column-sort">Organisation</a>
                                                    </div></th><th id="ctl00_PageContent_ctl01_blayoutMain_ListGrid_col3" scope="col"><div class="dxbs-fixed-header-content">
                                                        <a data-toggle="gridview-column-sort">Position</a>
                                                    </div></th><th id="ctl00_PageContent_ctl01_blayoutMain_ListGrid_col4" scope="col"><div class="dxbs-fixed-header-content">
                                                        <a data-toggle="gridview-column-sort">Start Date</a>
                                                    </div></th><th id="ctl00_PageContent_ctl01_blayoutMain_ListGrid_col5" scope="col"><div class="dxbs-fixed-header-content">
                                                        <a data-toggle="gridview-column-sort">End Date</a>
                                                    </div></th><th id="ctl00_PageContent_ctl01_blayoutMain_ListGrid_col6" scope="col"><div class="dxbs-fixed-header-content">
                                                        <a data-toggle="gridview-column-sort">Current</a>
                                                    </div></th><th id="ctl00_PageContent_ctl01_blayoutMain_ListGrid_col7" scope="col"><div class="dxbs-fixed-header-content">
                                                        <a data-toggle="gridview-column-sort">Description</a>
                                                    </div></th><th id="ctl00_PageContent_ctl01_blayoutMain_ListGrid_col8" class="dxbs-nrb" scope="col"><div class="dxbs-fixed-header-content">
                                                        <a data-toggle="gridview-column-sort">Date</a>
                                                    </div></th>
                                                </tr>
                                            </thead><tbody>
                                                <tr id="ctl00_PageContent_ctl01_blayoutMain_ListGrid_DXADRow" class="dxbs-details-row dxgvADR" style="display:none;">
                                                    <td colspan="8"></td>
                                                </tr><tr id="ctl00_PageContent_ctl01_blayoutMain_ListGrid_DXEmptyRow" class="dxbs-empty-data-row dxgvLVR">
                                                    <td colspan="8"><div>
                                                        No Referees Added
                                                    </div></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><script id="dxss_2042700808" type="text/javascript" data-executed="true">
<!--
ASPx.SS(function(ASPx, dx) {
ASPx.createControl(dx.BootstrapClientTextBox,'ctl00_PageContent_ctl01_blayoutMain_txtOrganisation','',{'uniqueID':'ctl00$PageContent$ctl01$blayoutMain$txtOrganisation','stateObject':{'rawValue':''},'validationGroup':'Application','customValidationEnabled':true,'isValid':true,'errorText':'Invalid value','validationPatterns':[new ASPx.RequiredFieldValidationPattern('Please enter organisation')],'display':'None','nullText':'Organisation','cssClasses':{}});

ASPx.createControl(dx.BootstrapClientTextBox,'ctl00_PageContent_ctl01_blayoutMain_txtPosition','',{'uniqueID':'ctl00$PageContent$ctl01$blayoutMain$txtPosition','stateObject':{'rawValue':''},'validationGroup':'Application','customValidationEnabled':true,'isValid':true,'errorText':'Invalid value','validationPatterns':[new ASPx.RequiredFieldValidationPattern('Please enter position')],'display':'None','nullText':'Position','cssClasses':{}});

ASPx.createControl(dx.BootstrapClientCalendar,'ctl00_PageContent_ctl01_blayoutMain_dteStartDate_C','',{'uniqueID':'ctl00$PageContent$ctl01$blayoutMain$dteStartDate$C','serverCurrentDate':new Date(2023,11,12,0,0,0,0),'visibleDate':new Date(2023,11,12,0,0,0,0),'fastNavRollbackTexts':['Back To Days', 'Back To Months', 'Back To Years'],'isDateEditCalendar':true,'cssClasses':{'d':'dxbs-day','ddd':'disabled text-muted','da':'dxbs-other-month text-muted','do':'dxbs-out-of-range disabled text-muted','ds':'table-active','dw':'dxbs-weekend text-danger','dt':'dxbs-today','fni':'dxbs-fast-nav-item','fnia':'text-muted'}});

ASPx.createControl(dx.BootstrapClientDateEdit,'ctl00_PageContent_ctl01_blayoutMain_dteStartDate','',{'callBack':function(arg) { WebForm_DoCallback('ctl00$PageContent$ctl01$blayoutMain$dteStartDate',arg,ASPx.Callback,'ctl00_PageContent_ctl01_blayoutMain_dteStartDate',ASPx.CallbackError,true); },'uniqueID':'ctl00$PageContent$ctl01$blayoutMain$dteStartDate','stateObject':{'rawValue':'N','useMinDateInsteadOfNull':false},'validationGroup':'Application','customValidationEnabled':true,'isValid':true,'errorText':'Invalid value','validationPatterns':[new ASPx.RequiredFieldValidationPattern('Please enter start date')],'display':'None','nullText':'Start Date','displayFormat':'{0:dd MMM yyy}','autoCompleteAttribute':{'name':'autocomplete','value':'off'},'outOfRangeWarningMessages':['The date must be in the range {0}...{1}', 'The date must be greater than or equal to {0}', 'The date must be less than or equal to {0}'],'dateFormatter':ASPx.DateFormatter.Create('dd/MM/yyy'),'loadingPanel':{'fade':false},'cssClasses':{}});

ASPx.createControl(dx.BootstrapClientListBox,'ctl00_PageContent_ctl01_blayoutMain_cboCurrent_L','',{'uniqueID':'ctl00$PageContent$ctl01$blayoutMain$cboCurrent$L','stateObject':{'CustomCallback':''},'isComboBoxList':true,'hasSampleItem':true,'itemsInfo':[{'value':'1','text':'No'},{'value':'2','text':'Yes'}],'cssClasses':{}},{'SelectedIndexChanged':function (s, e) { ASPx.CBLBSelectedIndexChanged('ctl00_PageContent_ctl01_blayoutMain_cboCurrent', e); },'ItemClick':function (s, e) { ASPx.CBLBItemMouseUp('ctl00_PageContent_ctl01_blayoutMain_cboCurrent', e); }});

ASPx.createControl(dx.BootstrapClientComboBox,'ctl00_PageContent_ctl01_blayoutMain_cboCurrent','cboCurrent',{'autoPostBack':true,'callBack':function(arg) { WebForm_DoCallback('ctl00$PageContent$ctl01$blayoutMain$cboCurrent',arg,ASPx.Callback,'ctl00_PageContent_ctl01_blayoutMain_cboCurrent',ASPx.CallbackError,true); },'uniqueID':'ctl00$PageContent$ctl01$blayoutMain$cboCurrent','stateObject':{'rawValue':''},'validationGroup':'Application','customValidationEnabled':true,'isValid':true,'errorText':'Invalid value','validationPatterns':[new ASPx.RequiredFieldValidationPattern('Please select whether you still work here')],'display':'None','nullText':'Current','autoCompleteAttribute':{'name':'autocomplete','value':'off'},'ddmInput':true,'lastSuccessValue':null,'islastSuccessValueInit':true,'loadingPanel':{},'cssClasses':{}});

ASPx.createControl(dx.BootstrapClientMemo,'ctl00_PageContent_ctl01_blayoutMain_txtDutieResponsibilitiess','',{'uniqueID':'ctl00$PageContent$ctl01$blayoutMain$txtDutieResponsibilitiess','stateObject':{'rawValue':''},'validationGroup':'Application','customValidationEnabled':true,'isValid':true,'errorText':'Invalid value','validationPatterns':[new ASPx.RequiredFieldValidationPattern('Please enter duties / responsibilities')],'display':'None','nullText':'Duties / Responsibilities','autoCompleteAttribute':{'name':'autocomplete','value':'off'},'cssClasses':{}});

ASPx.InitializeSVGSprite();
ASPx.createControl(dx.BootstrapClientButton,'ctl00_PageContent_ctl01_blayoutMain_btnAdd','',{'autoPostBack':true,'uniqueID':'ctl00$PageContent$ctl01$blayoutMain$btnAdd','serverEvents':['Click'],'validationGroup':'Application'},{'Click':ValidateControls});

ASPx.createControl(dx.BootstrapClientGridView,'ctl00_PageContent_ctl01_blayoutMain_ListGrid','ListGrid',{'callBack':function(arg) { WebForm_DoCallback('ctl00$PageContent$ctl01$blayoutMain$ListGrid',arg,ASPx.Callback,'ctl00_PageContent_ctl01_blayoutMain_ListGrid',ASPx.CallbackError,true); },'disableSwipeGestures':true,'uniqueID':'ctl00$PageContent$ctl01$blayoutMain$ListGrid','stateObject':{'keys':[],'callbackState':'BwQHAwIERGF0YQZTAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAkAAAAHV0VYUF9JRAdXRVhQX0lEAwAAARFXRVhQX09SR0FOSVNBVElPThFXRVhQX09SR0FOSVNBVElPTgcAAAENV0VYUF9QT1NJVElPTg1XRVhQX1BPU0lUSU9OBwAAAQ5XRVhQX1NUQVJUREFURQ5XRVhQX1NUQVJUREFURQgAAAEJV19FTkREQVRFCVdfRU5EREFURQgAAAELV0VYUF9EVVRJRVMLV0VYUF9EVVRJRVMHAAABD1dFWFBfQ1JFQVRFVVNFUg9XRVhQX0NSRUFURVVTRVIHAAABD1dFWFBfQ1JFQVRFREFURQ9XRVhQX0NSRUFURURBVEUIAAABCVdfQ1VSUkVOVAlXX0NVUlJFTlQHAAABAgAAAAxXRVhQX0VORERBVEUMV0VYUF9DVVJSRU5UAAAAAAcABwAHAAILRm9ybWF0U3RhdGUHAAIFU3RhdGUHpwcKBwACAQb//wIABwECAQcCAgEHAwIBBwQCAQcFAgEHBgIBBwcCAQb//wIABwAHAAcABwAHCgcABv//BwEG//8HAgb//wcDBv//BwQG//8HBQb//wcGBv//BwcG//8HCAb//wcJBv//AgAFAAAAgAkCB1dFWFBfSUQHAQIHV0VYUF9JRAMJAgACAAMHBgcAAgAHAAIBBwAHAAIAAgEHAAcABwAHAAcAAhpQcmV2UmVxdWVzdFZpc2libGVSb3dDb3VudAMHAA==','groupLevelState':{},'selection':''},'callBacksEnabled':true,'pageRowCount':0,'pageRowSize':10,'pageIndex':0,'pageCount':0,'selectedWithoutPageRowCount':0,'visibleStartIndex':0,'focusedRowIndex':-1,'allowFocusedRow':false,'allowSelectByItemClick':false,'allowSelectSingleRowOnly':false,'callbackOnFocusedRowChanged':false,'callbackOnSelectionChanged':false,'confirmDelete':'Are you sure you want to delete the selected award?','editState':0,'editItemVisibleIndex':-1,'searchPanelFilter':'','allowDelete':true,'allowEdit':false,'allowInsert':false,'columnProp':[[0,,,,0,,,,0,,1,,,0],[1,0,,'WEXP_ID',,,,,,,,,,,,,1],[2,,,'WEXP_ORGANISATION',,,,,1],[3,,,'WEXP_POSITION',,,,,2],[4,,,'WEXP_STARTDATE',,3,,,3],[5,,,'W_ENDDATE',,3,,,4],[6,,,'W_CURRENT',,,,,5],[7,,,'WEXP_DUTIES',,,,,6],[8,,,'WEXP_CREATEDATE',,3,,,7],[9,0,,'WEXP_CREATEUSER',,,,,,,,,,,,,1]],'shouldScrollToNewRow':false,'editMode':2,'indentColumnCount':0,'allowChangeColumnHierarchy':false,'allowMultiColumnAutoFilter':false,'adaptiveColumnsOrder':[8,7,6,5,4,3,2,0],'loadingPanel':{},'cssClasses':{'iei':'dxbs-icon dxbs-icon-error','idadad':'dxbs-icon dxbs-icon-arrow-down','idadau':'dxbs-icon dxbs-icon-arrow-up','idadal':'dxbs-icon dxbs-icon-arrow-down rotated','idadar':'dxbs-icon dxbs-icon-arrow-up rotated'}},null,null,{'adaptiveModeInfo':{'adaptivityMode':2,'hideDataCellsWindowInnerWidth':600,'adaptiveDetailColumnCount':1,'allowTextTruncationInAdaptiveMode':{'0':false,'2':false,'3':false,'4':false,'5':false,'6':false,'7':false,'8':false},'allowHideDataCellsByColumnMinWidth':false,'allowOnlyOneAdaptiveDetailExpanded':false}});
dx.BootstrapClientGridView.postponeInit('ctl00_PageContent_ctl01_blayoutMain_ListGrid', ({'errorItemHtml':'<tr class="table-danger">\r\n\t<td data-colSpan="8"></td>\r\n</tr>'}));

ASPx.createControl(dx.BootstrapClientFormLayout,'ctl00_PageContent_ctl01_blayoutMain','',{'uniqueID':'ctl00$PageContent$ctl01$blayoutMain','alignItemCaptionsInAllGroups':true});


});
//-->
</script>

</div>

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
