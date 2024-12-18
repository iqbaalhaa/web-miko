<div class="content-wrapper">
    <section class="content">
        <div class="box box-info">
            <div class="box-header">


                <h4 style="text-align:center"><b>DATA MAPABA PROVINSI JAMBI</b></h4>
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
                    <a href="<?php echo base_url('penduduk/tambah'); ?>" class="btn btn-success">Tambah Data
                        Mapaba</a>


                    <a href="<?php echo base_url('#'); ?>" target="_blank">
                    </a>
                </p>
                <table id="data" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr class="active">
                            <th style="text-align:center">No</th>
                            <th style="text-align:center">NIM</th>
                            <th style="text-align:center">Nama</th>
                            <th style="text-align:center">Tanggal Lahir</th>
                            <th style="text-align:center">Jenis Kelamin</th>
                            <th style="text-align:center">Universitas</th>
                            <th style="text-align:center">Status Tinggal</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($penduduk as $penduduk) {
                        ?>
                            <tr>
                                <td style="text-align:center"><?php echo $no; ?></td>
                                <td><?php echo $penduduk->nik; ?></td>
                                <td><?php echo $penduduk->nama; ?></td>
                                <td><?= date('d F Y', strtotime($penduduk->tanggal_lahir)); ?></td>
                                <td><?php echo $penduduk->jenis_kelamin; ?></td>
                                <td><?php echo $penduduk->pendidikan; ?></td>
                                <td><?php echo $penduduk->status; ?></td>
                                <td style="text-align:center">
                                    <a href="<?php echo base_url('penduduk/edit/' . $penduduk->nik); ?>"
                                        class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="<?php echo base_url('penduduk/hapus/' . $penduduk->nik); ?>"
                                        class="btn btn-danger btn-xs"
                                        onClick="return confirm('Yakin Akan Menghapus Data?');"><i
                                            class="fa fa-trash-o"></i> Hapus</a>
                                    <a href="<?php echo base_url('penduduk/detail/' . $penduduk->nik); ?>"
                                        class="btn btn-info btn-xs"><i class="fa fa-info-circle"></i> Detail</a>
                            </tr>
                            </td>
                        <?php
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
    </section>
</div>