<?= $this->extend('layout/templete'); ?>
<?= $this->section('content'); ?>
< <div class="container">
    <div class="row justify-content-md-center  rounded-2 shadow-sm ">
        <div class="col-6">
            <h3 class="text-center border rounded shadow">Silakan Daftar </h3>
            <form action="" method="post">
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" id="InputForName" value="" placeholder="Nama">
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" id="InputForEmail" value="" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" id="InputForPassword" placeholder="Password">
                </div>
                <div class="mb-3">
                    <input type="password" name="confpassword" class="form-control" id="InputForConfPassword" placeholder="Confirm Password">
                </div>
                <button type="submit" class="btn btn-success">Daftar</button>
            </form>
        </div>
    </div>
    </div>
    <?= $this->endsection(); ?>