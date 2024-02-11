<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Crush On The most popular Admin Dashboard template and ui kit">
    <meta name="author" content="PuffinTheme the theme designer">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>:: Crush On :: Login</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

    <!-- Core css -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/default.css" />

</head>

<body class="font-opensans horizontal h_menu sidebar_dark">

    <div class="auth">
        <form action="/user/login-do" method="post">
            <div class="auth_left">
                <div class="card">
                    <div class="text-center mb-5">
                        <a class="header-brand" href="index.html"><i class="fa fa-dashboard brand-logo"></i></a>
                    </div>
                    <div class="card-body">
                        <div class="card-title">Борлуулагчийн систем</div>
                        <?php if (isset($_SESSION['message'])): ?>
                        <div>
                            <strong class="text-danger"><?=$_SESSION['message'];unset($_SESSION['message'])?></strong>
                        </div>
                        <?php endif?>
                        <div class="form-group">
                            <label class="form-label">Утас</label>
                            <input type="text" name="utas" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Утас аа оруулна уу">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Нууц үг</label>
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1"
                                placeholder="Нууц үгээ оруулна уу">
                        </div>
                        <div class="form-footer">
                            <input type="submit" class="btn btn-primary btn-block" value="Нэвтрэх">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="auth_right">
            <div class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/slider1.svg" class="img-fluid" alt="login page" />
                        <div class="px-4 mt-4">
                            <h4>Fully Responsive</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/slider2.svg" class="img-fluid" alt="login page" />
                        <div class="px-4 mt-4">
                            <h4>Quality Code and Easy Customizability</h4>
                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/slider3.svg" class="img-fluid" alt="login page" />
                        <div class="px-4 mt-4">
                            <h4>Cross Browser Compatibility</h4>
                            <p>Overview We're a group of women who want to learn JavaScript.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/bundles/lib.vendor.bundle.js"></script>
    <script src="assets/js/core.js"></script>
</body>

</html>