<section class="section">
    <div class="section-header">
        <h1>Daftar Masjid</h1>
    </div>

    <div class="section-body">
    <h2 class="section-title">Data Masjid</h2>
        <p class="section-lead">
            Daftar Masjid yang tersebar di seluruh Kota Gorontalo
        </p>
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
            <div class="col-12">
            <div class="card">
            <div class="card-header">
                  <h4>List Data Masjid</h4>
                  <div class="card-header-action">
                    <a href="<?php echo base_url('admin/tambah_masjid'); ?>" class="btn btn-success">Tambah Data Masjid <i class="fas fa-plus"></i></a>
                  </div>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                    <thead>                                 
                        <tr>
                        <th class="text-center">
                            #
                        </th>
                        <th>Nama Masjid</th>
                        <th>Alamat</th>
                        <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        foreach($list as $l){ 
                            ?>
                        <tr>
                        <td>
                            <?= $no++; ?>
                        </td>
                        <td><?= $l->nama_masjid; ?></td>
                        <td><?= $l->alamat; ?></td>
                        <td>
                            <a href="<?php echo base_url().'admin/edit_data/'.$l->id_masjid; ?>" class="btn btn-warning btn-sm mr-2"> <i class="fas fa-pencil-alt"></i></a>
                            <a href="#" data-toggle="modal" data-target="#ModalHapus" class="btn btn-danger btn-sm"> <i class="fas fa-trash"></i> </a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- Logout Modal-->
<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus Data?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">Silahkan pilih tombol "Hapus Data" jika ingin menghapus data.</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger" href="<?php echo base_url().'admin/hapus/'.$l->id_masjid; ?>">Hapus Data</a>
        </div>
        </div>
    </div>
    </div>