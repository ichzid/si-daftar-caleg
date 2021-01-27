<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Caleg</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
						 <div class="form-group">
                            <label for="nik" class="col-sm-3 control-label">Nik</label>
                            <div class="col-sm-9">
                                <input type="text" name="nik" class="form-control" id="inputEmail3" placeholder="Inputkan nik" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jk" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select name="jk">
                                    <option> --- Pilih Jenis Kelamin ---</option>
                                    <option value="Laki-Laki"> Laki-Laki</option>
                                    <option value="Perempuan"> Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir" class="col-sm-3 control-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" name="tempat_lahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tempat Lahir" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_lahir" class="form-control" id="inputEmail3" placeholder="Inputkan Tanggal Lahir" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telp" class="col-sm-3 control-label">Nomor Telepon</label>
                            <div class="col-sm-9">
                                <input type="text" name="telp"class="form-control" id="inputEmail3" placeholder="Inputkan Nomor Telepon" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan" class="col-sm-3 control-label">Pendidikan Terakhir</label>
                            <div class="col-sm-9">
                                <input type="text" name="pendidikan" class="form-control" id="inputEmail3" placeholder="Inputkan Pendidikan Terakhir" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=caleg&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Caleg
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
	$nik=$_POST['nik'];
	$nama=$_POST['nama'];
	$tempat_lahir=$_POST['tempat_lahir'];
    $tgl_lahir=$_POST['tgl_lahir'];
	$telp=$_POST['telp'];
    $pendidikan=$_POST['pendidikan'];
    $jk=$_POST['jk'];
    //buat sql
    $sql="INSERT INTO tbl_caleg VALUES ('','$nik','$nama','$tempat_lahir','$tgl_lahir','$telp','$pendidikan','$jk')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=caleg&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
