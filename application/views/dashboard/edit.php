<section class="section">
    <div class="section-header">
        <h1>Edit Data Masjid</h1>
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

            <?php } else if($this->session->flashdata('warning')){  ?>

                <div class="alert alert-warning alert-dismissible show fade">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
                </div>

            <?php } else if($this->session->flashdata('info')){  ?>

                <div class="alert alert-info alert-dismissible show fade">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Info!</strong> <?php echo $this->session->flashdata('info'); ?>
                </div>
            <?php } ?>
            <!-- FLASHDATA AREA END -->
        <div class="row">
          <?php foreach($dataedit as $d){ ?>
            <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                  <form method="post" action="<?php echo base_url('admin/update') ?>" enctype="multipart/form-data">
                    <div class="card-header">
                      <h4>Edit Data Masjid</h4>
                    </div>
                    <div class="card-body">
                      <input type="hidden" name="id" value="<?= $d->id_masjid; ?>">
                      <div class="form-group">
                        <label><strong class="text-danger">*</strong>Nama Masjid</label>
                        <input type="text" name="nama_masjid" class="form-control" value="<?= $d->nama_masjid ?>" required="">
                      </div>
                      <div class="form-group">
                        <label><strong class="text-danger">*</strong>Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="<?= $d->alamat ?>" required="">
                      </div>
                      <div class="form-group">
                        <label>Luas Tanah</label>
                        <input type="text" name="luas_tanah" class="form-control" value="<?= $d->luas_tanah ?>">
                      </div>
                      <div class="form-group">
                        <label>Status Tanah</label>
                        <input type="text" name="status_tanah" class="form-control" value="<?= $d->status_tanah ?>">
                      </div>
                      <div class="form-group">
                        <label>Luas Bangunan</label>
                        <input type="text" name="luas_bangunan" class="form-control" value="<?= $d->luas_bangunan ?>">
                      </div>
                      <div class="form-group">
                        <label>Daya Tampung</label>
                        <input type="number" name="daya_tampung" class="form-control" value="<?= $d->daya_tampung ?>">
                      </div>
                      <div class="form-group">
                        <label>Jumlah Pengurus</label>
                        <input type="number" name="jumlah_pengurus" class="form-control" value="<?= $d->jumlah_pengurus ?>">
                      </div>
                      <div class="form-group">
                        <label>Jumlah Imam</label>
                        <input type="number" name="jumlah_imam" class="form-control" value="<?= $d->jumlah_imam ?>">
                      </div>
                      <div class="form-group">
                        <label>Jumlah Khatib</label>
                        <input type="number" name="jumlah_khatib" class="form-control" value="<?= $d->jumlah_khatib ?>">
                      </div>
                      <div class="form-group mb-0">
                        <label>Fasilitas</label>
                        <textarea class="form-control" name="fasilitas" value="<?= $d->fasilitas ?>"></textarea>
                      </div>
                      <div class="form-group mb-0">
                        <label>Kegiatan</label>
                        <textarea class="form-control" name="kegiatan" value="<?= $d->kegiatan ?>"></textarea>
                      </div>
                      <div class="form-group">
                        <label><strong class="text-danger">*</strong>Latitude</label>
                        <input type="text" name="latitude" class="form-control" value="<?= $d->latitude ?>" required="">
                      </div>
                      <div class="form-group">
                        <label><strong class="text-danger">*</strong>Longitude</label>
                        <input type="text" name="longitude" class="form-control" value="<?= $d->longitude ?>" required="">
                      </div>
                      <!-- <input type="file" name="sampul" multiple> -->
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
                    <div class="col-12 col-md-6 col-lg-6">
                      <div class="card">
                        <div class="card-header">
                          <h4>Gallery</h4>
                          </div>
                          <div class="card-body">
                            <div class="gallery gallery-md">
                              <?php $path = FCPATH .'assets'.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.$d->id_masjid.DIRECTORY_SEPARATOR; ?>
                                <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                  <div class="carousel-inner">
                                  <?php if (empty(glob($path."*.*")) === true): ?>

                                  <img src="<?php echo base_url('assets/img/example-image.jpg'); ?>" style="height: min-content; filter: grayscale(100%);" alt="">

                                  <?php else: ?>

                                    <?php $i=0; foreach (glob($path."*.*") as $file): ?>
                                    <?php if ($i==0) {$set_ = 'active'; } else {$set_ = ''; } ?> 
                                    <div class="carousel-item <?php echo $set_; ?>">
                                      <img class="d-block w-100" src="<?= str_replace(FCPATH, base_url(), $file); ?>">
                                    </div>
                                    <?php $i++; endforeach ?>
                                    
                                  <?php endif; ?>
                                  </div>
                                  <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                  <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </div>
                            </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <?php } ?>
        </div>
    </div>
</section>