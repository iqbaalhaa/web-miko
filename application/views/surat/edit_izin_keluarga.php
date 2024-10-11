<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <h4 style="text-align:center"><b>EDIT SURAT IZIN KELUARGA</b></h4>
                                <hr>
                            </div>

                            <div class="box-body">

                                <?php
                if ($this->session->flashdata('sukses')) {
                  ?>
                                <div class="callout callout-success">
                                    <p style="font-size:14px">
                                        <i class="fa fa-check"></i> <?php echo $this->session->flashdata('sukses'); ?>
                                    </p>
                                </div>
                                <?php
                }
                ?>

                                <form action="<?php echo base_url('surat/izin_keluarga/edit'); ?>" method="post">

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>NIK Ayah</label>
                                            <input type="hidden" name="id" class="form-control" required
                                                value="<?php echo $izin_keluarga->id_izin_keluarga; ?>" />
                                            <select name="ayah" class="form-control" id="nama" required>
                                                <?php
                        foreach ($penduduk as $penduduk) :
                          if ($penduduk->nik == $izin_keluarga->nik_ayah) {
                            ?>
                                                <option value="<?php echo $penduduk->nik; ?>" selected>
                                                    <?php echo $penduduk->nik; ?> - <?php echo $penduduk->nama; ?>
                                                </option>
                                                <?php
                            } else {
                              ?>
                                                <option value="<?php echo $penduduk->nik; ?>">
                                                    <?php echo $penduduk->nik; ?> - <?php echo $penduduk->nama; ?>
                                                </option>
                                                <?php
                          }
                        endforeach;
                        ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>NIK Anak</label>
                                            <select name="anak" class="form-control" id="nik" required>
                                                <?php
                        foreach ($pendudukk as $pendudukk) :
                          if ($pendudukk->nik == $izin_keluarga->nik_anak) {
                            ?>
                                                <option value="<?php echo $pendudukk->nik; ?>" selected>
                                                    <?php echo $pendudukk->nik; ?> - <?php echo $pendudukk->nama; ?>
                                                </option>
                                                <?php
                            } else {
                              ?>
                                                <option value="<?php echo $pendudukk->nik; ?>">
                                                    <?php echo $pendudukk->nik; ?> - <?php echo $pendudukk->nama; ?>
                                                </option>
                                                <?php
                          }
                        endforeach;
                        ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tujuan</label>
                                            <input type="text" name="tujuan" class="form-control" placeholder="Tujuan"
                                                value="<?php echo $izin_keluarga->tujuan_izin_keluarga; ?>" required />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanda Tangan</label>
                                            <select name="pejabat" class="form-control" required>
                                                <?php
                        foreach ($pejabat as $pejabat) :
                          if ($pejabat->id_pejabat == $izin_keluarga->id_pejabat) {
                            ?>
                                                <option value="<?php echo $pejabat->id_pejabat; ?>">
                                                    <?php echo $pejabat->nama_pejabat; ?></option>
                                                <?php
                            } else {
                              ?>
                                                <option value="<?php echo $pejabat->id_pejabat; ?>">
                                                    <?php echo $pejabat->nama_pejabat; ?></option>
                                                <?php
                          }
                        endforeach;
                        ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="edit_izin_keluarga" class="btn btn-success"
                                                value="Simpan">
                                            <a href="<?php echo base_url('surat/izin_keluarga/'); ?>"
                                                class="btn btn-danger">Batal</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>