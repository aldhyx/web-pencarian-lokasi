<?= $this->extend('layout/templete'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row text-center mt-2 ">
        <div class="col py-5 bg-white rounded shadow mb-3">
            <h5 class="fs-3 text-uppercase text-center">
                Sistem Pendukung keputusan Pemilihan Tempat wisata di Kabupaten Timor Tengah Selatan Dengan Metode Promethee.
            </h5>
        </div>
        <div class="card mt-5 py-3 px-3">
            <div class="card-header bg-success">
                <h3>Metode Promethee</h3>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>Promethee yang
                        merupakan singkatan dari Preference Rangking
                        Organization Method for Enrichment Evaluation adalah
                        metode outrangking yang menawarkan cara yang
                        fleksibel dan sederhana kepada user (pembuat
                        keputusan) untuk menganilisis masalah – masalah
                        multikriteria. Prinsip yang digunakan adalah penetapan
                        prioritas alternatif yang telah ditetapkan berdasarkan
                        pertimbangan dengan kaidah dasar :
                        Max { f1(x), f2(x), f3(x),..., fi(x), ....,fk(x)Ig
                        Dimana k adalah sejumlah kumpulan alternatif dan fi
                        (i=1,2,...,k) merupakan nilai atau ukuran relatif kriteria
                        untuk masing – masing alternatif.</p>
                    <footer class="blockquote-footer">Menurut Brans dan Marschal, <cite title="Source Title">(2009)</cite></footer>
                </blockquote>
            </div>
        </div>
        </section>
    </div>
</div>
</div>

<?= $this->endsection(); ?>