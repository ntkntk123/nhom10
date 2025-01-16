
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="9PbZBK46s38QWYfyXWUabDs71VpN9dfCiw6H3LqG">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://lazada.org.in/css/app.css" rel="stylesheet">
    <link href="https://lazada.org.in/css/app.scss" rel="stylesheet">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=ugeWnUPzOxoI6HVfp8m1tkhVmWLNuHOwpByUs3R8HgFq6lvjipUdz8Zmv6LiGH0nei6354JslkNd9RYCwszV2g" charset="UTF-8"></script><script type="text/javascript" src="https://lazada.org.in/js/app.js"></script>
    <script type="text/javascript" src="https://lazada.org.in/js/bootstrap.js"></script>
    <!-- Scripts -->
       <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/66a61ebe32dca6db2cb6b8a7/1i3seg734';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="https://lazada.org.in">
                    
                    <img src="img/logo-lazada.png" alt="Logo" style="width:60px;">
                    Đăng Nhập
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                                                                                    <li class="nav-item">
                                    <a class="nav-link" href="https://lazada.org.in/login">Đăng nhập</a>
                                </li>
                            
                                                            <li class="nav-item">
                                    <a class="nav-link" href="https://lazada.org.in/registration">Đăng ký</a>
                                </li>
                                                                        </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 align-middle"
            style="background-color: rgb(37 99 235 / var(--tw-bg-opacity, 1)); min-height: 100%; ">
                <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-bold fs-2">Đăng ký</div>

                    <div class="card-body">
                        <form method="POST" action="https://lazada.org.in/post-registration">
                            <input type="hidden" name="_token" value="9PbZBK46s38QWYfyXWUabDs71VpN9dfCiw6H3LqG" autocomplete="off">                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">Họ và tên</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control " name="name"
                                        value="" required autocomplete="name" autofocus>

                                                                    </div>
                            </div>
                            <div class="row mb-3">
                                <label for="mobile"
                                    class="col-md-4 col-form-label text-md-end">Số điện thoại</label>

                                <div class="col-md-6">
                                    <input id="mobile" type="text" class="form-control" name="mobile" value=""
                                        required autofocus>

                                                                    </div>
                            </div>
                            <div class="row mb-3">
                                <label for="bySeller"
                                    class="col-md-4 col-form-label text-md-end">Mã giới thiệu</label>

                                <div class="col-md-6">
                                    <input id="bySeller" type="text" class="form-control" name="bySeller" value=""
                                        required autofocus>
                                                                    </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">Mật khẩu</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control " name="password"
                                        required autocomplete="new-password">

                                                                    </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">Xác nhận mật khẩu</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4" style="text-align: center;">
                                    <button type="submit" class="btn btn-primary w-100">
                                        Đăng ký
                                    </button>
                                    Đã có tài khoản?
                                    <a class="btn btn-link" href="https://lazada.org.in/login">
                                        Đăng nhập
                                    </a>
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
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
</body>

</html>
