<?= $this->extend('layout/templete'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col mt-2">
            <div class="alert alert-secondary" role="alert">
                <h2 class="text-center mt-2">Tabel Data Alternatif</h2>
            </div>
            <div>
                <!-- notiv data ditambakan -->
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success alert-dismissible fade show text-uppercase fs-6" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif; ?>
                <!-- end notif +data -->
            </div>
            <div class="card mt-2">
                <div class="card-header">
                    <a class="btn btn-primary" href="" data-bs-toggle="modal" data-bs-target="#modaladd"><i class="bi bi-plus"></i>Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered border-dark table-warning">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($alternative as $item) : ?>
                                <tr class="text-center">
                                    <th scope="row"><?= $i++; ?></th>
                                    <td> <?= $item['code']; ?> </td>
                                    <td> <?= $item['name']; ?> </td>
                                    <td>
                                        <a href="/alternative/edit/<?= $item['id']; ?>" class=" btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
                                        <form action="alternative/<?= $item['id']; ?>" method="post" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class=" btn btn-danger" onclick="return confirm('Apakah kamu yakin ?')"><i class="bi bi-trash3"></i>Hapus</button>
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

            <!-- Modal add alternative -->
            <div class="modal fade" id="modaladd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg"">
                <div class=" modal-content">
                    <div class="modal-header rounded shadow-sm">
                        <h4 class="text-uppercase ">
                            Form tambah data alternatif
                        </h4>
                    </div>
                    <form action="alternative" method="post">
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
                            <button type="submit" class="btn btn-success" data-bs-dismiss="modal">save</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- endmodal add alternative -->


    </div>
</div>
</div>
<?= $this->endsection(); ?>