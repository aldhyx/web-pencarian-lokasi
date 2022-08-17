<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title><?= $title; ?></title>
</head>


<body>

    <div class="container-md">
        <div class="row justify-content-center mt-3">
            <div class="col-5 bg-body rounded shadow-sm my-3 px-4 py-5">
                <div class="card text-center">
                    <div class="card-header">
                        <h3>Silakan Login!</h3>
                    </div>
                    <form action="">
                        <div class="form-floating mb-3 ">
                            <input type="text" class="form-control" id="username" placeholder="Username" name="username" autocomplete="new" required autofocus>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                        </div>

                        <a href="/dashboard" class="w-100 fw-bold btn btn-lg btn-success" type="submit">
                            <span>Login</span>
                            <i class="fa-solid fa-right-to-bracket ms-2"></i>
                        </a>
                        <p class="mt-4"> Belum Punya akun! <a href="/register">Daftar</a></p>
                </div>
            </div>
        </div>
    </div>



    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>