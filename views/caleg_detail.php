<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Caleg</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_caleg WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td>Nik</td> <td><?= $data['nik'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jk'] ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td> <td><?= $data['tempat_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td> <td><?= $data['tgl_lahir'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon</td> <td><?= $data['telp'] ?></td>
                        </tr>
                        <tr>
                            <td>Pendidikan Terakhir</td> <td><?= $data['pendidikan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=caleg&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Arsip </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

