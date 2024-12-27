<div class="content-wrapper">
  <section class="content">
    <div class="box box-info">
      <div class="box-header">
        <h4 style="text-align:center;"><b>DATA PELATIHAN KADER DASAR</b></h4><hr>
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
        <a href="<?php echo base_url('kelahiran/tambah'); ?>" class="btn btn-success">Tambah Data PKD</a>
        <div style="display: inline-block; margin-left: 10px;">
                        <label>Pilih Cabang</label>
                        <select class="form-control" style="width: 200px;">
                            <option value="kota_jambi">Kota Jambi</option>
                            <option value="merangin">Merangin</option>
                            <option value="kerinci">Kerinci</option>
                            <option value="bungo">Bungo</option>
                            <option value="tebo">Tebo</option>
                            <option value="sarolangun">Sarolangun</option>
                            <option value="batanghari">Batang Hari</option>
                            <option value="tanjungjabungbarat">Tanjung Jabung Barat</option>
                            <option value="tanjungjabungtimur">Tanjung Jabung Timur</option>
                        </select>
                    </div>
      <table id="data" class="table table-bordered" width="100%" cellspacing="0" >
        <thead>
          <tr class="active">
            <th style="text-align:center">No</th>
            <th style="text-align:center">NIK</th>
            <th style="text-align:center">Nama</th>
            <th style="text-align:center">Tanggal Lahir</th>
            <th style="text-align:center">Alamat Tinggal</th>
            <th style="text-align:center">Universitas</th>
            <th style="text-align:center">Tahun PKD</th>
            <th style="text-align:center">Aksi</th>
          </tr>
        </tr>
      </thead>
      <tbody>
        <?php
$no = 1;
foreach ($kelahiran as $kelahiran) {
	?>
         <tr>
          <td style="text-align:center"><?php echo $no; ?></td>
          <td><?php echo $kelahiran->nama; ?></td>
            <td><?=date('d F Y', strtotime($kelahiran->tanggal_lahir));?></td>
            <td><?php echo $kelahiran->jenis_kelamin; ?></td>
            <td><?php echo $kelahiran->alamat; ?></td>
            <td><?php echo $kelahiran->nama_ayah; ?></td>
            <td><?php echo $kelahiran->nama_ibu; ?></td>
            <td style="text-align:center">
            <a href="<?php echo base_url('kelahiran/edit/' . $kelahiran->id_kelahiran); ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i> Edit</a>
            <a href="<?php echo base_url('kelahiran/hapus/' . $kelahiran->id_kelahiran); ?>" class="btn btn-danger btn-xs" onClick="return confirm('Yakin Akan Menghapus Data?');"><i class="fa fa-trash-o"></i> Hapus</a>
            <a href="<?php echo base_url('kelahiran/detail/' . $kelahiran->id_kelahiran); ?>" class="btn btn-info btn-xs"><i class="fa fa-info-circle"></i> Detail</a>
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