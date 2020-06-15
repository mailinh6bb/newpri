<!DOCTYPE html>
<html lang="en" class="body-full-height">
    
<!-- Tieu Long Lanh Kute -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>        
        <!-- META SECTION -->
        <base href="{{ asset('/')}}">
        <title>Electro Admin</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="admin/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" id="theme" href="admin/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Xin chào</strong>,lấy lại mật khẩu</div>
                    <form action="{{ route('admin.post.resetpassword')}}" class="form-horizontal" method="post">
                        @csrf
                        @if($checkemail)
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="hidden" name="id" value="{{ $checkemail->id }}">
                                <input name="name" type="text" class="form-control" placeholder="Username" value="{{ $checkemail->name }}"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input name="password" type="password" class="form-control" placeholder="Mật khẩu mới"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input name="resetpassword" type="password" class="form-control" placeholder="Nhập lại mật khẩu"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <h3 style='color:red;'>{{ $errors }}</h3>
                            </div>
                        </div>
                        @endif
                        <div class="form-group">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <button type="submit"  class="btn btn-warning btn-block">Lấy lại mật khẩu</button>
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div
        </div>
    
    <!-- COUNTERS // NOT INCLUDED IN TEMPLATE -->
        <!-- GOOGLE -->
        <script type="text/javascript">
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-36783416-1', 'aqvatarius.com');
          ga('send', 'pageview');
        </script>        
        <!-- END GOOGLE -->
        
        <!-- YANDEX -->
        <script type="text/javascript">
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
        <noscript><div><img src="http://mc.yandex.ru/watch/25836617" style="position:absolute; left:-9999px;" alt="" /></div></noscript>     
        <!-- END YANDEX -->
    <!-- END COUNTERS // NOT INCLUDED IN TEMPLATE -->  
    </body>
<!-- Tieu Long Lanh Kute -->
</html>






