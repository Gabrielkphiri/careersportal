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
        <div class="content-wrapper">




        <div class="content-header row">
        <div class="content-header-left col-md-18 col-18 mb-4 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Jobs</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
     <li class="breadcrumb-item">Human Resources</a></li>
     <li class="breadcrumb-item"><a href="#">Jobs</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



                <div class="content-body">
                    <!-- Resources example section start -->
                    <form method="post" action="./list" id="aspnetForm">
    <div class="aspNetHidden">
    <input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
    <input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwULLTEzMzM1MTQxMTgPZBYCZg9kFgQCAQ9kFgRmD2QWAmYPFgIeCWlubmVyaHRtbAUNR2FicmllbCBQaGlyaWQCAQ8WAh4HVmlzaWJsZWdkAgQPZBYCAgMPZBYCAgcPZBYCAgEPZBYCZg9kFgICAQ88KwArAwAPFgIeD0RhdGFTb3VyY2VCb3VuZGdkBg9kEBYLZgIBAgICAwIEAgUCBgIHAggCCQIKFgs8KwAIAQAWBB4PQ29sVmlzaWJsZUluZGV4Zh4LR2xvYmFsSW5kZXhmPCsADAEAFgIfBAIBPCsADAIAFgQfAwIBHwQCAgs8KwAFAQEUKwAGFgQeBFRleHQFFlByZXZlbnRpb24gQ29vcmRpbmF0b3IeF05hdmlnYXRlVXJsRm9ybWF0U3RyaW5nBScvam9icy92aWV3LzEwMTkzL3ByZXZlbnRpb24tY29vcmRpbmF0b3JkPCsAawEAFgIeFkFjY2Vzc2liaWxpdHlDb21wbGlhbnRnZGRkPCsADAEAFgQfAwICHwQCAzwrAAwCABYEHwMCAx8EAgQLPCsABQEBPCsACAECPCsAawEAFgIfB2c8KwAMAQAWBB8DAgQfBAIFPCsADAEAFgIfBAIGPCsADAEAFgQfAwIFHwQCBzwrAAwCABYEHwMCBh8EAggLPCsABQEBPCsAEQECPCsAawEAFgIfB2c8KwAMAgAWBB8DAgcfBAIJCzwrAAUBATwrABEBAjwrAGsBABYCHwdnPCsADAEAFgIfBAIKDxYLAgECAgIDAgICBAICAgICAgIFAgUCAhYFBZsBRGV2RXhwcmVzcy5XZWIuQm9vdHN0cmFwLkJvb3RzdHJhcEdyaWRWaWV3Q29tbWFuZENvbHVtbiwgRGV2RXhwcmVzcy5XZWIuQm9vdHN0cmFwLnYyMi4yLCBWZXJzaW9uPTIyLjIuNy4wLCBDdWx0dXJlPW5ldXRyYWwsIFB1YmxpY0tleVRva2VuPWI4OGQxNzU0ZDcwMGU0OWEFmAFEZXZFeHByZXNzLldlYi5Cb290c3RyYXAuQm9vdHN0cmFwR3JpZFZpZXdEYXRhQ29sdW1uLCBEZXZFeHByZXNzLldlYi5Cb290c3RyYXAudjIyLjIsIFZlcnNpb249MjIuMi43LjAsIEN1bHR1cmU9bmV1dHJhbCwgUHVibGljS2V5VG9rZW49Yjg4ZDE3NTRkNzAwZTQ5YQWdAURldkV4cHJlc3MuV2ViLkJvb3RzdHJhcC5Cb290c3RyYXBHcmlkVmlld0h5cGVyTGlua0NvbHVtbiwgRGV2RXhwcmVzcy5XZWIuQm9vdHN0cmFwLnYyMi4yLCBWZXJzaW9uPTIyLjIuNy4wLCBDdWx0dXJlPW5ldXRyYWwsIFB1YmxpY0tleVRva2VuPWI4OGQxNzU0ZDcwMGU0OWEFmAFEZXZFeHByZXNzLldlYi5Cb290c3RyYXAuQm9vdHN0cmFwR3JpZFZpZXdUZXh0Q29sdW1uLCBEZXZFeHByZXNzLldlYi5Cb290c3RyYXAudjIyLjIsIFZlcnNpb249MjIuMi43LjAsIEN1bHR1cmU9bmV1dHJhbCwgUHVibGljS2V5VG9rZW49Yjg4ZDE3NTRkNzAwZTQ5YQWYAURldkV4cHJlc3MuV2ViLkJvb3RzdHJhcC5Cb290c3RyYXBHcmlkVmlld0RhdGVDb2x1bW4sIERldkV4cHJlc3MuV2ViLkJvb3RzdHJhcC52MjIuMiwgVmVyc2lvbj0yMi4yLjcuMCwgQ3VsdHVyZT1uZXV0cmFsLCBQdWJsaWNLZXlUb2tlbj1iODhkMTc1NGQ3MDBlNDlhGDwrAAcBBRQrAAJkZGQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFIWN0bDAwJFBhZ2VDb250ZW50JGJ4RGF0YSRMaXN0R3JpZJpM9teI0bM/L6L2S5p3+CoHcJ5AK5Tlkaj/ysC8m1kW">
    </div>

    <script type="text/javascript">
    //<![CDATA[
    var theForm = document.forms['aspnetForm'];
    if (!theForm) {
        theForm = document.aspnetForm;
    }
    function __doPostBack(eventTarget, eventArgument) {
        if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
            theForm.__EVENTTARGET.value = eventTarget;
            theForm.__EVENTARGUMENT.value = eventArgument;
            theForm.submit();
        }
    }
    //]]>
    </script>


    <script src="/WebResource.axd?d=MzqqPX5qlZONgZi-yLvfY4ddcOstZVneRgaDHP0Srbwo9UKvDqWp8pkLxI7lty5vOQrc2mLjGu-d0WcGIJugLCx4OpVmwmBYRdJKj3Fa_7U1&amp;t=637426931155986221" type="text/javascript"></script>


    <script src="/ScriptResource.axd?d=So25_J4GiMJPHd7j0dI9X4ibEQekkYH4d_3VeanRLpyfPvrsz2ZUAjrIKoqwfGU0Foe6ZFw3LzJSVDVvy2LxcyZ7HBi5RC4egyrya9SZjQu0r4BGa-OBaQjikdXFt4pEkMnzB7oDBPqt7L5J9CeGvfvwdWqrNSgucekhzWR-rAM1&amp;t=ffffffffcd368728" type="text/javascript"></script>
    <script src="/ScriptResource.axd?d=cd9niZ2AiXaolrS-1_2GDCADHqe5Ads3fAo9Z8IEcruNF8ASqsTOSuK_vihTmZRj1Vp4NM_HA53DSpgtMW6Djcwf0CM79N75-HfG6znDedHOXlAkzSzd60xDFy5ZMenoOg12NVbWd3-GaUz6qFhpy3_DWOZlgMhJWBq3JieoFSd_noHze5WLTZdIZSKtacgM0&amp;t=ffffffffcd368728" type="text/javascript"></script>
    <script src="../Scripts/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../Scripts/jquery-ui-1.12.1.min.js" type="text/javascript"></script>
    <div class="aspNetHidden">

        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334">
        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAOurxh+uk5tPZSQ7tFHZM2lhXds9SKBfdrYZBv5VbkPFJm9xMY7IXAgLwG1CIPS1R90LYC4KrijPizTH5iTyfrmRqujHt3IqxQXV6fy2SZmvg==">
    </div>

                        <script type="text/javascript">
    //<![CDATA[
    Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager1', 'aspnetForm', [], [], [], 90, 'ctl00');
    //]]>
    </script>




        <span id="ctl00_PageContent_PageSettings"></span>




        <script id="dxss_1594992262" type="text/javascript" data-executed="true">
    <!--
    var ASPx,dx,DevExpress;!function n(t,o,e,r,i,a,c){var u=[],l=[],d=0,f=[],s=[],h=!1;function C(n,r,i){n[i]=function(){r(t,o,e)}}function v(){return r==d}function m(){return!0}function E(n){return function(){throw new Error(n)}}function x(n){n()}var S=-1;function b(n,t,o,e){var r=++S;return function(){i(function(){r==S&&o()&&(S--,function(n){for(var t=n.length,o=0,e=null;(e=n[o])&&o<t;o++)e&&e();n.length=0}(t),e())})}}var p=b(0,f,function(){return h&&v()},function(){t.attachToReady=x}),T=b(0,s,m,function(){t.attachToLoad=x,p()}),w=b(0,l,m,function(){t.SS=function(n){n(t,o,e)},T()}),A=b(0,u,v,function(){t.IS=E("Too late"),w()}),y=0;t.SS=function(n){var t=y++;i(function(){C(l,n,t)})};var P=0;t.IS=function(n,t){i(function(){for(C(u,n,t),d++;P<d&&u[P];)u[P]=u[P]()&&null,P++;A()})},t.attachToReady=f.push.bind(f),t.attachToLoad=s.push.bind(s),t.initResourceLoader=n,c.addEventListener("DOMContentLoaded",function(){r=c.querySelectorAll("script[id^=dxis_][defer]").length,A()}),a.addEventListener("load",function(){h=!0,p()});var L=["BeginCallback","BrowserWindowResized","CallbackError","ControlsInitialized","EndCallback","ValidationCompleted"],B=["ForEachControl","Get","GetByName","GetControlsByPredicate","GetControlsByType"],G=[];var g=L.reduce(function(n,t){return((n[t]={}).AddHandler=function(n){G.push({e:t,h:n})})&&n},{});g=B.reduce(function(n,t){return(n[t]=E("The environment has not been initialized. To access the "+t+" member, call the member from the ControlsInitialized event's handler."))&&n},g),t.loadControlCollectionPreloadHandlers=function(n){G.forEach(function(t){n[t.e].AddHandler(t.h)}),L.forEach(function(t){g[t]=n[t]}),B.forEach(function(t){g[t]=n[t].bind(n)}),t.loadControlCollectionPreloadHandlers=G=g=null},a.ASPxClientControl={GetControlCollection:function(){return g}}}(ASPx||(ASPx={}),dx||(dx={}),DevExpress||(DevExpress={}),-1,window.requestAnimationFrame||setTimeout,window,document);

    //-->
    </script><script id="dxis_910514559" src="/DXR.axd?r=1_9-56rfr" type="text/javascript"></script><script id="dxis_687493367" src="/DXR.axd?r=1_10,1_253,1_21-56rfr&amp;order=0" type="text/javascript" defer=""></script><script id="dxis_796950092" src="/DXR.axd?r=1_62-56rfr" type="text/javascript"></script><script id="dxis_1573197053" src="/DXR.axd?r=1_12,1_13,1_47,1_17,1_211,1_224,1_225,1_226,1_209,1_228,1_237,1_239,1_240,1_230,1_231,1_235,1_241,23_0,23_1,23_11,23_12,23_18,23_15,1_181,1_182,23_30,1_19,1_20,1_188,1_190,1_15,23_39,1_192,23_38,1_6-96rfr&amp;order=1" type="text/javascript" defer=""></script><table class="dxlpLoadingPanel_iOS dxlpControl_iOS" cellspacing="0" cellpadding="0" id="ctl00_PageContent_loadingMain" style="border-collapse:collapse;position:absolute;left:0px;top:0px;z-index:30000;display:none;">
        <tbody><tr>
            <td class="dx" style="padding-right:0px;"><img class="dxlp-loadingImage dxlp-imgPosLeft" src="/DXR.axd?r=1_87-56rfr" alt="" align="middle"></td><td class="dx" style="padding-left:0px;"><span id="ctl00_PageContent_loadingMain_TL">Processing... Please Wait</span></td>
        </tr>
    </tbody></table><script id="dxss_1713804318" type="text/javascript" data-executed="true">
    <!--
    ASPx.SS(function(ASPx, dx) {
    ASPx.FillDocumentElementDXThemeCssClassName("iOS");
    ASPx.createControl(ASPxClientLoadingPanel,'ctl00_PageContent_loadingMain','loadingPanel',{'uniqueID':'ctl00$PageContent$loadingMain'});

    });
    //-->
    </script>

        <!-- / start page row --><div class="row-">

            <!-- starting card --><div class="col-22"><div class="card"><div class="card-content"><div class="card-body">

                    <script id="dxss_1685776902" type="text/javascript" data-executed="true">
    <!--
    ASPx.SS(function(ASPx, dx) {
    ASPx.AccessibilitySR.DefaultCallbackMessage = 'Callback in process.';

    });
    //-->
    </script><div class="dxbs-gridview dxgvAdD" id="ctl00_PageContent_bxData_ListGrid">
        <div class="card">
            <div class="card-body">
                <div class="dxbs-search-panel">
                    <div class="input-group">
                        <div class="dxbs-button-edit" id="ctl00_PageContent_bxData_ListGrid_DXSE">
                            <div>
                                <input id="ctl00_PageContent_bxData_ListGrid_DXSE_I" class="form-control text-muted" type="text" name="ctl00$PageContent$bxData$ListGrid$DXSE" value="Enter text to search..." savedspellcheck="[object Object]" spellcheck="false" autocomplete="off">
                                <span class="dxbs-feedback">
                                    <span class="dxbs-edit-btn dxbs-clear-btn d-none" role="button" aria-label="Clear value">
                                        <span aria-hidden="true" class="dxbs-icon dxbs-icon-remove"></span></span></span>
                            </div>
                        </div><span class="input-group-append dx-not-acc"><button class="btn btn-secondary dxbs-button" data-toggle="gridview-search-apply" type="button">Search

                        </button>
                        </span>
                    </div>
                </div><div id="ctl00_PageContent_bxData_ListGrid_DXAHeaderPanel" class="card-body dxbs-ap" style="display:none;">
                    <div id="ctl00_PageContent_bxData_ListGrid_DXADHeader" class="dxgvADH" style="display:none;">
                        <div class="card dxbs-th">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div><table id="ctl00_PageContent_bxData_ListGrid_DXMainTable" class="dxbs-table table table-bordered table-sm" cellspacing="0" cellpadding="0" style="border-collapse:collapse;">
                <thead>
                    <tr id="ctl00_PageContent_bxData_ListGrid_DXHeadersRow0">
                        <th id="ctl00_PageContent_bxData_ListGrid_col0" class="dxbs-cmd-cell" scope="col" style="width:20px;"><div class="dxbs-fixed-header-content">
                            <span>Actions</span>
                        </div></th><th id="ctl00_PageContent_bxData_ListGrid_col2" scope="col"><div class="dxbs-fixed-header-content">
                            <a data-toggle="gridview-column-sort">TITLE</a>
                        </div></th><th id="ctl00_PageContent_bxData_ListGrid_col3" scope="col"><div class="dxbs-fixed-header-content">
                            <a data-toggle="gridview-column-sort">LOCATION</a>
                        </div></th><th id="ctl00_PageContent_bxData_ListGrid_col4" scope="col"><div class="dxbs-fixed-header-content">
                            <a data-toggle="gridview-column-sort">PROJECT</a>
                        </div></th><th id="ctl00_PageContent_bxData_ListGrid_col5" scope="col"><div class="dxbs-fixed-header-content">
                            <a data-toggle="gridview-column-sort">GRADE</a>
                        </div></th><th id="ctl00_PageContent_bxData_ListGrid_col7" scope="col"><div class="dxbs-fixed-header-content">
                            <a data-toggle="gridview-column-sort">STATUS</a>
                        </div></th><th id="ctl00_PageContent_bxData_ListGrid_col8" scope="col"><div class="dxbs-fixed-header-content">
                            <a data-toggle="gridview-column-sort">DEADLINE</a>
                        </div></th><th id="ctl00_PageContent_bxData_ListGrid_col9" class="dxbs-nrb" scope="col"><div class="dxbs-fixed-header-content">
                            <a data-toggle="gridview-column-sort">PUBLISH DATE</a>
                        </div></th>
                    </tr>
                </thead><tbody>
                    <tr id="ctl00_PageContent_bxData_ListGrid_DXADRow" class="dxbs-details-row dxgvADR" style="display:none;">
                        <td colspan="8"></td>
                    </tr><tr id="ctl00_PageContent_bxData_ListGrid_DXDataRow0" class="dxbs-first-data-row" style="">
                        <td class="dxbs-cmd-cell"><button class="btn btn-link dxbs-button" data-toggle="gridview-datarow-custom" data-args="btnSubmitAplication" type="button"><span aria-hidden="true" class="image ft-edit"></span>Submit Aplication</button></td><td><a class="dxbs-hyperlink" href="/jobs/view/10194/prevention-specialist">Electrican</a></td><td>Head Office - Lusaka District, Lusaka Province</td><td>P528 - DFPP-DHAPP</td><td>C6</td><td class="dxGridFormatYellowFillWithDarkYellowText" style="color:#c59207;background-color:#9fff9c;">Aplication Not Submitted</td><td>13 Dec 2023 00:00</td><td class="dxbs-nrb">07 Dec 2023 00:00</td>
                    </tr><tr id="ctl00_PageContent_bxData_ListGrid_DXDataRow1" class="dxgvLVR" style="">
                        <td class="dxbs-cmd-cell"><button class="btn btn-link dxbs-button" data-toggle="gridview-datarow-custom" data-args="btnSubmitAplication" type="button"><span aria-hidden="true" class="image ft-edit"></span>Submit Aplication</button></td><td><a class="dxbs-hyperlink" href="/jobs/view/10193/prevention-coordinator">Prevention Coordinator</a></td><td>Lusaka, Chipata, Kabwe, Kasama, Ndola - Lusaka District, Lusaka Province</td><td>P528 - DFPP-DHAPP</td><td>C5</td><td class="dxGridFormatYellowFillWithDarkYellowText" style="color:#db9209;background-color:#9fff9c;">Aplication Not Submitted</td><td>13 Dec 2023 00:00</td><td class="dxbs-nrb">07 Dec 2023 00:00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div><script id="dxss_2067544660" type="text/javascript" data-executed="true">
    <!--
    ASPx.SS(function(ASPx, dx) {
    ASPx.createControl(dx.BootstrapClientButtonEdit,'ctl00_PageContent_bxData_ListGrid_DXSE','',{'uniqueID':'ctl00$PageContent$bxData$ListGrid$DXSE','stateObject':{'rawValue':''},'nullText':'Enter text to search...','forceShowClearButtonAlways':true,'cssClasses':{}});

    ASPx.createControl(dx.BootstrapClientGridView,'ctl00_PageContent_bxData_ListGrid','ListGrid',{'callBack':function(arg) { WebForm_DoCallback('ctl00$PageContent$bxData$ListGrid',arg,ASPx.Callback,'ctl00_PageContent_bxData_ListGrid',ASPx.CallbackError,true); },'disableSwipeGestures':true,'uniqueID':'ctl00$PageContent$bxData$ListGrid','stateObject':{'keys':['10194','10193'],'callbackState':'BwUHAwIERGF0YQaTAwAAAAACAAAAAgAAAAAAAAACAAAAAAsAAAAGSk9CX0lEBkpPQl9JRAMAAAEJSk9CX1RJVExFCUpPQl9USVRMRQcAAAEPSk9CX1BVQkxJU0hEQVRFD0pPQl9QVUJMSVNIREFURQgAAAEQSk9CX0RFQURMSU5FREFURRBKT0JfREVBRExJTkVEQVRFCAAAAQ5KT0JfQ1JFQVRFVVNFUg5KT0JfQ1JFQVRFVVNFUgcAAAEHSl9HUkFERQdKX0dSQURFBwAAAQhKX1NUQVRVUwhKX1NUQVRVUwcAAAEJSl9QUk9KRUNUCUpfUFJPSkVDVAcAAAEKSl9MT0NBVElPTgpKX0xPQ0FUSU9OBwAAAQ1KX0FQUExfU1RBVFVTDUpfQVBQTF9TVEFUVVMDAAABDkpfQVBQTFlfU1RBVFVTDkpfQVBQTFlfU1RBVFVTBwAAAQwAAAANSk9CX1NUQVJUREFURQtKT0JfRU5EREFURQpKT0JfU1RBVFVTCUpPQl9TVEFHRQtKT0JfUFJPSkVDVAlKT0JfR1JBREUPSk9CX0FQUFJPVkVVU0VSD0pPQl9BUFBST1ZFREFURQ5KT0JfQ1JFQVRFREFURRJKT0JfTEFTVFVQREFURVVTRVISSk9CX0xBU1RVUERBVEVEQVRFB0pfU1RBR0UAAAAABwAHAAcABwAHAAb//wMG0icHAhZQcmV2ZW50aW9uIFNwZWNpYWxpc3QgCAIEAACtdLf22wgIAgQAgCdzbvvbCAcCDkJvbmlmYWNlLlBoaXJpBwICQzYHAghBcHByb3ZlZAcCEVA1MjggLSBERlBQLURIQVBQBwIuSGVhZCBPZmZpY2UgLSBMdXNha2EgRGlzdHJpY3QsIEx1c2FrYSBQcm92aW5jZQMHAAcCGEFwbGljYXRpb24gTm90IFN1Ym1pdHRlZAcABwAG//8DBtEnBwIWUHJldmVudGlvbiBDb29yZGluYXRvcggCBAAArXS39tsICAIEAIAnc2772wgHAg5Cb25pZmFjZS5QaGlyaQcCAkM1BwIIQXBwcm92ZWQHAhFQNTI4IC0gREZQUC1ESEFQUAcCSEx1c2FrYSwgQ2hpcGF0YSwgS2Fid2UsIEthc2FtYSwgTmRvbGEgLSBMdXNha2EgRGlzdHJpY3QsIEx1c2FrYSBQcm92aW5jZQMHAAcCGEFwbGljYXRpb24gTm90IFN1Ym1pdHRlZAILRm9ybWF0U3RhdGUHDAcCAAAHAgEBBwIAAAIFU3RhdGUHrwcLBwACAQb//wIABwECAQcCAgEHAwIBBwQCAQb//wIABwUCAQcGAgEHBwIBBv//AgAHAAcABwAHAAcLBwAG//8HAQb//wcCBv//BwMG//8HBAb//wcFBv//BwYG//8HBwb//wcIBv//BwkG//8HCgb//wIABQAAAIAJAgZKT0JfSUQHAQIGSk9CX0lEAwkCAAIAAwcGBwACAAcAAgEHAgcAAgACAQcABwAHAAcABwACElNlYXJjaFBhbmVsVmlzaWJsZQoCAQIaUHJldlJlcXVlc3RWaXNpYmxlUm93Q291bnQDBwI=','groupLevelState':{},'selection':''},'callBacksEnabled':true,'pageRowCount':2,'pageRowSize':10,'pageIndex':-1,'pageCount':1,'selectedWithoutPageRowCount':0,'visibleStartIndex':0,'focusedRowIndex':-1,'allowFocusedRow':false,'allowSelectByItemClick':false,'allowSelectSingleRowOnly':true,'callbackOnFocusedRowChanged':false,'callbackOnSelectionChanged':false,'editState':0,'editItemVisibleIndex':-1,'searchPanelFilter':'','allowDelete':false,'allowEdit':false,'allowInsert':false,'columnProp':[[0,,,,0,,,,0,,1,,,0],[1,0,,'JOB_ID',,,,,,,,,,,,,1],[2,,,'JOB_TITLE',,,,,1],[3,,,'J_LOCATION',,,,,2],[4,,,'J_PROJECT',,,,,3],[5,,,'J_GRADE',,,,,4],[6,0,,'J_STATUS',,,,,,,,,,,,,1],[7,,,'J_APPLY_STATUS',,,,,5],[8,,,'JOB_DEADLINEDATE',,3,,,6],[9,,,'JOB_PUBLISHDATE',,3,,,7],[10,0,,'JOB_CREATEUSER',,,,,,,,,,,,,1]],'shouldScrollToNewRow':false,'editMode':2,'indentColumnCount':0,'allowChangeColumnHierarchy':false,'allowMultiColumnAutoFilter':false,'adaptiveColumnsOrder':[9,8,7,5,4,3,2,0],'loadingPanel':{},'cssClasses':{'iei':'dxbs-icon dxbs-icon-error','idadad':'dxbs-icon dxbs-icon-arrow-down','idadau':'dxbs-icon dxbs-icon-arrow-up','idadal':'dxbs-icon dxbs-icon-arrow-down rotated','idadar':'dxbs-icon dxbs-icon-arrow-up rotated'}},{'CustomButtonClick':CustomButtonClick},null,{'adaptiveModeInfo':{'adaptivityMode':2,'hideDataCellsWindowInnerWidth':600,'adaptiveDetailColumnCount':1,'allowTextTruncationInAdaptiveMode':{'0':false,'2':false,'3':false,'4':false,'5':false,'7':false,'8':false,'9':false},'allowHideDataCellsByColumnMinWidth':false,'allowOnlyOneAdaptiveDetailExpanded':false}});
    dx.BootstrapClientGridView.postponeInit('ctl00_PageContent_bxData_ListGrid', ({'errorItemHtml':'<tr class="table-danger">\r\n\t<td data-colSpan="8"></td>\r\n</tr>'}));


    });
    //-->
    </script>




                </div></div></div></div><!-- ending card -->
        </div><!-- / end  page row -->

        <!-- / start modal alert --> <div class="modal fade text-left" id="modalMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9" style="display: none;" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header bg-info white"><h4 class="modal-title white" id="myModalLabel9">Request processed successfully</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"><h5></h5></div><div class="modal-footer"><button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button></div></div></div></div>
        <!-- / start modal alert --> <div class="modal fade text-left" id="modalAlert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel9" style="display: none;" aria-hidden="true"><div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header bg-warning white"><h4 class="modal-title white" id="myModalLabel9">Unable to process request</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"><h5></h5></div><div class="modal-footer"><button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button></div></div></div></div>

        <script id="dxss_1038191996" type="text/javascript" data-executed="true">
    <!--
    ASPx.SS(function(ASPx, dx) {
    ASPx.createControl(ASPxClientCallback,'ctl00_PageContent_callMain','callMain',{'callBack':function(arg) { WebForm_DoCallback('ctl00$PageContent$callMain',arg,ASPx.Callback,'ctl00_PageContent_callMain',ASPx.CallbackError,true); },'uniqueID':'ctl00$PageContent$callMain'},{'CallbackError':callMainCallbackError,'CallbackComplete':callMainCallbackComplete});

    });
    //-->
    </script>



    <script type="text/javascript">
    //<![CDATA[

    var callBackFrameUrl='/WebResource.axd?d=voJVDmVtk86dOL1ep6pPMQ44Ii_Slg8lX8VhA_iK0v6tX7FPRMj47y3BXYsFemFJtIUntiM9zlew5e2ckcfWPI7m83IpG0qCztBSBObqbqY1&t=637426931155986221';
    WebForm_InitCallback();//]]>
    </script>
    <input type="hidden" name="DXScript" value="1_9,1_10,1_253,1_21,1_62,1_12,1_13,1_47,1_17,1_211,1_224,1_225,1_226,1_209,1_228,1_237,1_239,1_240,1_230,1_231,1_235,1_241,23_0,23_1,23_11,23_12,23_18,23_15,1_181,1_182,23_30,1_19,1_20,1_188,1_190,1_15,23_39,1_192,23_38,1_6"><input type="hidden" name="DXCss" value="0_1511,0_1512,1_66,0_1514,23_80,23_88"></form>
                </div>
            </div>

    </div>

    @include('layouts.footer')

    <aside class="control-sidebar control-sidebar-dark">

    </aside>

</div>


<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

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
