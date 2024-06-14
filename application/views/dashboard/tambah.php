<section class="section">
    <div class="section-header">
        <h1>Tambah Data Masjid</h1>
    </div>

    <div class="section-body">
        <!-- FLASHDATA AREA -->
        <?php if($this->session->flashdata('success')){ ?>
            <div class="alert alert-success alert-dismissible show fade">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php } else if($this->session->flashdata('error')){  ?>

                <div class="alert alert-danger alert-dismissible show fade">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php } ?>
            <!-- FLASHDATA AREA END -->
        <div class="row">
            <div class="col-6">
            <div class="card">
                  <form method="post" action="<?php echo base_url('admin/store') ?>" enctype="multipart/form-data">
                    <div class="card-header">
                      <h4>Tambah Data Masjid</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label><strong class="text-danger">*</strong>Nama Masjid</label>
                        <input type="text" name="nama_masjid" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label><strong class="text-danger">*</strong>Alamat</label>
                        <input type="text" name="alamat" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>Luas Tanah</label>
                        <input type="text" name="luas_tanah" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Status Tanah</label>
                        <input type="text" name="status_tanah" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Luas Bangunan</label>
                        <input type="text" name="luas_bangunan" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Daya Tampung</label>
                        <input type="number" name="daya_tampung" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Jumlah Pengurus</label>
                        <input type="number" name="jumlah_pengurus" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Jumlah Imam</label>
                        <input type="number" name="jumlah_imam" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Jumlah Khatib</label>
                        <input type="number" name="jumlah_khatib" class="form-control">
                      </div>
                      <div class="form-group mb-0">
                        <label>Fasilitas</label>
                        <textarea class="form-control" name="fasilitas"></textarea>
                      </div>
                      <div class="form-group mb-0">
                        <label>Kegiatan</label>
                        <textarea class="form-control" name="kegiatan"></textarea>
                      </div>
                      <div class="form-group">
                        <label><strong class="text-danger">*</strong>Latitude</label>
                        <input type="text" name="latitude" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label><strong class="text-danger">*</strong>Longitude</label>
                        <input type="text" name="longitude" class="form-control" required="">
                      </div>
                      <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" class="form-control" name="userfile[]" size="20" multiple>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <a href="<?php echo base_url('admin/datamasjid'); ?>" class="btn btn-warning mr-2">Kembali</a>
                      <button class="btn btn-primary">Tambah</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</section>