<?= $this->extend('layout/templete'); ?>
<?= $this->section('content'); ?>
<div class="container-sm">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center my-0 py-4 fw-bold text-uppercase"> Form Ubah Data Kriteria</h2>
                </div>
                <div class="card-body">
                    <form action="<?= url_to('criteria.update', $criteria['id']) ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="id" value="<?= $criteria['id']; ?>">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label fw-bold fz-18">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" value="<?= $criteria['name']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label fw-bold fz-18">Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="code" name="code" value="<?= $criteria['code']; ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary text-uppercase fw-bold"><i class="bi bi-pencil-square"></i> ubah data
                                </button>
                                <a href="<?= url_to('criteria.index'); ?>" class="btn text-uppercase fw-bold">Batalkan</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endsection(); ?>