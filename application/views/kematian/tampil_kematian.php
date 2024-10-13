<div class="content-wrapper">
    <section class="content">
        <div class=" box box-info">
            <div class="box-header">
                <h4 style="text-align:center; "><b>DATA PELATIHAN KADER LANJUT</b></h4>
                <hr>
            </div>

            <div class="box-body table-responsive">

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

                <p>
                    <a href="<?php echo base_url('kematian/tambah'); ?>" class="btn btn-success">Tambah Data
                        PKL</a>
                </p>
                <br>
                <table id="data" class="table table-bordered" width="200%" cellspacing="0">
                    <thead>
                        <tr class="active">
                            <th style="text-align:center">No</th>
                            <th style="text-align:center">Nama</th>
                            <th style="text-align:center">Umur </th>
                            <th style="text-align:center">Jenis Kelamin</th>
                            <th style="text-align:center">Alamat</th>
                            <th style="text-align:center">Tanggal Wafat</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($kematian) && is_array($kematian)): ?>
                            <?php $no = 1; ?>
                            <?php foreach ($kematian as $data): ?>
                                <tr>
                                    <td style="text-align:center"><?php echo $no; ?></td>
                                    <td><?php echo isset($data->nama) ? htmlspecialchars($data->nama) : ''; ?></td>
                                    <td><?php echo isset($data->tanggal_lahir) ? htmlspecialchars($data->tanggal_lahir) : ''; ?> Tahun </td>
                                    <td><?php echo isset($data->jenis_kelamin) ? htmlspecialchars($data->jenis_kelamin) : ''; ?></td>
                                    <td><?php echo isset($data->alamat) ? htmlspecialchars($data->alamat) : ''; ?></td>
                                    <td><?php echo isset($data->tanggal_wafat) ? date('d F Y', strtotime($data->tanggal_wafat)) : ''; ?></td>
                                    <td style="text-align:center">
                                        <?php if (isset($data->nik)): ?>
                                            <a href="<?php echo base_url('kematian/edit/' . $data->nik); ?>"
                                               class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="<?php echo base_url('kematian/hapus/' . $data->nik); ?>"
                                               class="btn btn-danger btn-xs"
                                               onClick="return confirm('Yakin Akan Menghapus Data?');"><i
                                                   class="fa fa-trash-o"></i> Hapus</a>
                                            <a href="<?php echo base_url('kematian/detail/' . $data->nik); ?>"
                                               class="btn btn-info btn-xs"><i class="fa fa-info-circle"></i> Detail</a>
                                        <?php else: ?>
                                            <span>ID tidak tersedia</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
    </section>
</div>
