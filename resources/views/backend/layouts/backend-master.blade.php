<!DOCTYPE html>
<html lang="en">
{{-- <base href="{{ asset('/')}}"> --}}
<base href="{{ asset('/')}}/">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- META SECTION -->
    <title>Electro - Admin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="shortcut icon" href="img/fav.png">
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->
    <link rel="stylesheet" type="text/css" id="theme" href="admin/css/theme-default.css" />
    <!-- EOF CSS INCLUDE -->
</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        @include('backend.layouts.backend-sidebar')
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            @include('backend.layouts.backend-header')
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- PAGE CONTENT WRAPPER -->
            @yield('backend-main')
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->

    <!-- MESSAGE BOX-->

    {{-- Kiểm trả và thông báo   --}}
    @if (Session::has('flash_message'))
    <div class="alert alert-{!!Session::get('flash_level')!!} alert-dismissible" style="font-size: 16px;width:600px; position: fixed; z-index: 100; top: 15px;left: 50%; transform: translateX(-50%); text-align: center">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong style="text-align: center;">{!!Session::get('flash_message')!!}</strong>
  </div>
  @endif

  <!-- MESSAGE BOX-->
  <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>
                <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="{{ route('admin.logout') }}" class="btn btn-success btn-lg">Yes</a>
                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END MESSAGE BOX-->

<!-- START PRELOADS -->
<audio id="audio-alert" src="admin/audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="admin/audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->
<!-- START SCRIPTS -->
<!-- START PLUGINS -->
<script src="admin/js/plugins/jquery/jquery.min.js"></script>
<script src="admin/js/plugins/jquery/jquery-ui.min.js"></script>
<script src="admin/js/plugins/bootstrap/bootstrap.min.js"></script>

<script src="admin/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
<script src="admin/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script src="admin/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script src="admin/js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script src="admin/js/plugins/bootstrap/bootstrap-select.js"></script>
<script src="admin/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<!-- END PLUGINS -->



<!-- START THIS PAGE PLUGINS-->
<script src="https://www.google-analytics.com/analytics.js"></script>
<script src="admin/js/plugins/icheck/icheck.min.js"></script>
<script src="admin/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script src="admin/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
<script src="admin/js/demo_tables.js"></script>
<script src="admin/js/plugins/morris/raphael-min.js"></script>
<script src="admin/js/plugins/morris/morris.min.js"></script>
<script src="admin/js/plugins/rickshaw/d3.v3.js"></script>
<script src="admin/js/plugins/rickshaw/rickshaw.min.js"></script>
<script src='admin/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
<script src='admin/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
<script src='admin/js/plugins/bootstrap/bootstrap-datepicker.js'></script>
<script src="admin/js/plugins/owl/owl.carousel.min.js"></script>
<script src="admin/js/plugins/moment.min.js"></script>
<script src="admin/js/plugins/daterangepicker/daterangepicker.js"></script>
<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->
{{-- <script src="admin/js/settings.js"></script> --}}

<script src="admin/js/plugins.js"></script>
<script src="admin/js/actions.js"></script>

<script src="admin/js/demo_dashboard.js"></script>
<!-- END TEMPLATE -->
<script>
    $(function(){
            //Spinner
            $(".spinner_default").spinner()
            $(".spinner_decimal").spinner({step: 0.01, numberFormat: "n"});                
            //End spinner
            
            //Datepicker
            $('#dp-2').datepicker();
            $('#dp-3').datepicker({startView: 2});
            $('#dp-4').datepicker({startView: 1});                
            //End Datepicker
        });
    </script>        
    <!-- END SCRIPTS -->

    <!-- COUNTERS // NOT INCLUDED IN TEMPLATE -->
    <!-- GOOGLE -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-36783416-1', 'aqvatarius.com');
      ga('send', 'pageview');
  </script>
  <!-- END GOOGLE -->

  <!-- YANDEX -->
  <script>
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter25836617 = new Ya.Metrika({id:25836617,
                    webvisor:true,
                    accurateTrackBounce:true});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="http://mc.yandex.ru/watch/25836617" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- END YANDEX -->
<!-- END COUNTERS // NOT INCLUDED IN TEMPLATE -->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img_upload').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#filename").change(function () {
        readURL(this);
    });

    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img_upload2').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#filename2").change(function () {
        readURL2(this);
    });

    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img_upload3').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#filename3").change(function () {
        readURL3(this);
    });

    function readURL4(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#img_upload4').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#filename4").change(function () {
        readURL4(this);
    });

</script>

<script>
    $(".notiDelete").click(function(){
        $("#mb-remove-row").addClass("open");
    });
</script>
<script>
    var data = document.getElementById("noti").value;
    if(!data)
    {
        $("#notifi").addClass("open");
    }

</script>

</body>

</html>