<?= $this->extend('layout/templete'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-5 bg-body rounded shadow-sm my-3 px-4 py-5">
            <div class="card text-center">
                <div class="card-header">
                    <h3 class="rounded shadow-sm text-center">Silakan Login!</h3>
                </div>
                <form action="">
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control" id="username" placeholder="username" name="username" autocomplete="new" required autofocus>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" placeholder="password" name="password" required>
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 fw-bold btn btn-lg btn-success" type="submit">
                        <span>Login</span>
                        <i class="fa-solid fa-right-to-bracket ms-2"></i>
                    </button>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>