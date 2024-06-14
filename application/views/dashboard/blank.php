            <section class="section">
                <div class="section-header">
                    <h1>Blank Page</h1>
                </div>

                <div class="section-body">
                <?php foreach($dataedit as $d){ ?>
                <?= form_open_multipart('admin/prosesUpload'); ?>
                <input type="hidden" name="id" value="<?= $d->id_masjid; ?>">
                    <p>File Gambar</p>
                    <input type="file" name="gambar[]" multiple><br><br>
                    <button>Upload Gambar</button>
                <?= form_close(); ?>
                
                    <p><?= $d->sampul ? $d->sampul : 'no data' ?></p>
                <?php } ?>
                </div>
            </section>