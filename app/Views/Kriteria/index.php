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
                    <a class="btn btn-primary" href="#"><i class="bi bi-plus"></i>Tambah Data</a>
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
                                    <a href="" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
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
        </div>
    </div>
</div>
<?= $this->endsection(); ?>