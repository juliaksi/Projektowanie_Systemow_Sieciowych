<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<body class="hm-gradient">

<main>
        <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#e0c5ec;">
            <a class="navbar-brand font-bold" href="/">YoGrafik</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <span class="navbar-text">
                        Dla niezalogowanych:
                    </span>
                    <li class="nav-item">
                        <a class="nav-link" href="/login"><i class="fa fa-id-badge"></i> Zaloguj się <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register"><i class="fa fa-user-plus"></i> Zarejestruj</a>
                    </li>
                    <span class="navbar-text">
                        Dla zalogowanych:
                    </span>
                    <li class="nav-item">
                        <a class="nav-link" href="/paneluzytkownika"><i class="fa fa-user"></i> Mój profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout"><i class="fa fa-share-square-o"></i> Wyloguj się </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/panelzarzadzania"><i class="fa fa-users"></i> Zarządzaj </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--/.Navbar -->
</main>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js"></script>
</body>
<?php echo $__env->yieldContent('content'); ?>
</body>
</html>


<style>
    @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css);
    @import url(https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.3/css/mdb.min.css);

    .hm-gradient {
        background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
    }
    .darken-grey-text {
        color: #2E2E2E;
    }

    .navbar .dropdown-menu a:hover {
        color: #616161 !important;
    }
    .darken-grey-text {
        color: #2E2E2E;
    }
</style>









<?php /**PATH C:\Users\48512\YoGrafik\resources\views/template/bylejak.blade.php ENDPATH**/ ?>