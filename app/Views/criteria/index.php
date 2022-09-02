<?= $this->extend('layout/templete'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center my-0 py-5 text-uppercase">Tabel Data Kriteria</h2>
        </div>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="col-12 mb-2">
                <div class="alert alert-success alert-dismissible fade show text-text-capitalize fs-6" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="col-12">
            <div class="card mt-2">
                <div class="card-header p-3">
                    <a class="btn btn-primary text-uppercase fw-bold" href="" data-bs-toggle="modal" data-bs-target="#modaladd">
                        <i class="bi bi-plus"></i> Tambah Data
                    </a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr class="text-center text-uppercase">
                                <th scope="col">No</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($criteria as $item) : ?>
                                <tr class="text-center">
                                    <th scope="row"><?= $i++; ?></th>
                                    <td> <?= $item['code']; ?> </td>
                                    <td> <?= $item['name']; ?> </td>
                                    <td>
                                        <a href="<?= url_to('criteria.detail', $item['id']) ?>" class=" btn btn-outline-dark text-uppercase fw-bold">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <form action="<?= url_to('criteria.delete', $item['id']) ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class=" btn btn-outline-danger text-uppercase fw-bold" onclick="return confirm('Apakah kamu yakin ?')"><i class="bi bi-trash3"></i> Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-center">
                    <i class="fa fa-copyright " aria-hidden="true">@SPK_Promethee</i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- PASANG MODAL DI LUAR MAIN CONTAINER -->
<!-- Modal add alternative -->
<div class="modal fade" id="modaladd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"">
                <div class=" modal-content">
        <div class="modal-header rounded shadow-sm">
            <h4 class="text-uppercase ">
                Form tambah data kriteria
            </h4>
        </div>
        <form action="criteria" method="post" action="<?= url_to('criteria.create'); ?>">
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" autofocus>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="code" class="col-sm-2 col-form-label">Kode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="code" name="code">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary text-uppercase fw-bold" data-bs-dismiss="modal">Simpan</button>
                <button type="button" class="btn text-uppercase fw-bold" data-bs-dismiss="modal">Batalkan</button>
            </div>
        </form>
    </div>
</div>
<!-- endmodal add alternative -->
<?= $this->endsection(); ?>