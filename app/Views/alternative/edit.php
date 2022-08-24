<?= $this->extend('layout/templete'); ?>
<?= $this->section('content'); ?>
<div class="container-sm">
    <div class="row  ">
        <div class="col-7 mt-4">
            <div class=" card">
                <div class="card-header ">
                    <h2 class="text-center shadow-sm my-2 fw-bold"> Form Ubah Data Alternative</h2>
                </div>
                <div class="card-body">
                    <form action="/alternative/update/<?= $alternative['id']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $alternative['id']; ?>">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label fw-bold fz-18">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-uppercase " id="name" name="name" value="<?= $alternative['name']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label fw-bold fz-18">Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control text-uppercase " id="code" name="code" value="<?= $alternative['code']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary"><i class="bi bi-pencil-square"></i> ubah data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endsection(); ?>