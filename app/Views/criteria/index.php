<?= $this->extend('layout/templete'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="alert alert-secondary" role="alert">
                <h2 class="text-center">Tabel Data Kriteria</h2>
            </div>
            <div class="card mt-2">
                <div class="card-header">
                    <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#modaladdk"><i class="bi bi-plus"></i>Tambah Data</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered border-dark shadow table-info">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Kode</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th scope="row">1</th>
                                <td>K1</td>
                                <td>Kebersihan</td>
                                <td>
                                    <a href="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modaleditc"><i class="bi bi-pencil-square"></i>Edit</a>
                                    <a href="" class="btn btn-danger"><i class="bi bi-trash"></i>Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer text-center">
                    <i class="fa fa-copyright " aria-hidden="true">@SPK_Promethee</i>
                </div>
            </div>
            <!-- Modal edit data kriteria -->
            <div class="modal fade" id="modaleditc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header rounded shadow-sm alert alert-secondary">
                            <h4 class="text-uppercase ">
                                Form edit data kriteria
                            </h4>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post">
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
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save </button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal endedit data kriteria -->

            <!-- Modal add kriteria -->
            <div class="modal fade" id="modaladdk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg"">
                    <div class=" modal-content">
                    <div class="modal-header rounded shadow-sm">
                        <h4 class="text-uppercase ">
                            Form tambah data Kriteria
                        </h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
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
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Save </button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- endmodal add kriteria -->



    </div>
</div>
</div>
<?= $this->endsection(); ?>