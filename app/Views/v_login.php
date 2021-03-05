
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="public/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="public/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Be Fullstack Developer
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="public/assets/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="public/assets/css/material-dashboard.css?v=2.1.0-12-11-18" rel="stylesheet" />
  <style type="text/css">
    body {
        background: url(public/assets/img/lock.jpg) no-repeat center center fixed;
        background-size: cover;
        height: 100%;
        overflow: hidden;
    }

    footer.footer nav a, footer.footer div, footer.footer div a{
        color: white;
        text-decoration:none;
    }
  </style>
</head>

<body class="off-canvas-sidebar">
  <div class="wrapper ">
      <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="index.php">Be Fullstack Developer</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="https://buku-laravel-vue.com" class="nav-link">
                    <i class="material-icons">home</i> Back To Home
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="content">
    <div class="container-fluid">
        
    <div class="row justify-content-center">
        <div class="col-sm-6 align-self-center">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">lock</i>
                    </div>
                    <p class="card-category"></p>
                    <h3 class="card-title">Authentication <small></small></h3>
                </div>
                <div class="card-body">
                    <form action="index.php" method="post">
                    <div class="form-group label-floating has-success">
                        <label class="control-label">Enter your token</label>
                            <input type="text" name="token" placeholder="..." class="form-control" />
                        <span class="form-control-feedback">
                        <i class="material-icons">done</i>
                        </span>
                    </div>
                    <button type="submit" name="login" value="ok" class="btn btn-success">Login</button>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="material-icons text-warning">info</i>
                        <a href="../">Get more information...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>        
    </div>
</div>

<footer class="footer">
    <div class="container">
    <nav class="float-left">
        <ul>
        <li>
            <a href="https://www.buku-laravel-vue.com">
            Be Fullstack Developer Team
            </a>
        </li>
        </ul>
    </nav>
    <div class="copyright float-right">
        &copy;
        <script>
        document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
    </div>
    <!-- your footer here -->
    </div>
</footer>  </div>
  <!--   Core JS Files   -->
  <script src="public/assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="public/assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="public/assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="public/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="public/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="public/assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
    <script>
    $(document).ready(function() {
        function niceAlert(text='test', type='alert'){
            $.notify({
                icon: 'notifications_active',
                message: text

                },{
                type: type,
                timer: 4000,
                placement: {
                    from: 'top',
                    align: 'right'
                }
            });
        }
            });
    </script>
</body>

</html>