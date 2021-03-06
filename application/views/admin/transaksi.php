<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <!-- /.box -->

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">TRANSAKSI</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-hover table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>TANGGAL</th>
                <th>USER</th>
                <th>PAKET</th>
                <th>PENGINAPAN</th>
                <th>TRANSPORTASI</th>
                <th>WISATA</th>
                <th>HARI</th>
                <th>TAMU</th>
                <th>HARGA</th>
                <th>STATUS</th>
                <th>BUKTI</th>
                <th>E-TIKET</th>
                <th>MENU</th>
              </tr>
            </thead>

            <tbody>
              <?php $nomor = 1; ?>
              <?php

              $this->db->select(
                  '
                      t.id_transaksi as id,
                      u.nama_lengkap,
                      pk.nama_paket,
                      p.nama_penginapan,
                      tr.nama_transp,
                      w.nama_wisata,
                      t.hari,
                      t.tamu,
                      t.total_harga,
                      t.status,
                      t.bukti_transaksi,
                      t.e_tiket,
                      t.post_date
                      '
                );
              $this->db->join('user as u', 'u.id_user = t.id_user', 'left');
              $this->db->join('wisata as w', 'w.id_wisata = t.id_wisata', 'left');
              $this->db->join('transport as tr', 'tr.id_transport = t.id_transport', 'left');
              $this->db->join('paket as pk', 'pk.id_paket = t.id_paket', 'left');
              $query =  $this->db->join('penginapan as p', 'p.id_penginapan = t.id_penginapan', 'left')->get('transaksi as t');
              $nomor = 1;

              foreach ($query->result_array() as $trans) :
              ?>
                <tr>
                  <td>
                    <p><?= $trans['id'] ?></p>
                  </td>
                  <td>
                    <p><?= $trans['post_date'] ?></p>
                  </td>
                  <td>
                    <p><?= $trans['nama_lengkap'] ?></p>
                  </td>
                  <td>
                    <p><b><?= $trans['nama_paket'] ?></p>
                  </td>
                  <td>
                    <p><?= $trans['nama_penginapan'] ?></p>
                  </td>
                  <td>
                    <p><?= $trans['nama_transp'] ?></p>
                  </td>
                  <td>
                    <p><?= $trans['nama_wisata'] ?></p>
                  </td>
                  <td>
                    <p><?= $trans['hari'] ?> Hari</p>
                  </td>
                  <td>
                    <p><?= $trans['tamu'] ?> Orang</p>
                  </td>
                  <td>
                    <p>Rp. <?= number_format($trans['total_harga']) ?></p>
                  </td>
                  <td>
                    <p><?php
                    if ($trans['status'] == "Pending") {
                      echo '<span class="label label-warning">Pending</span>';
                    }else{
                      echo '<span class="label label-success">Success</span>';
                    }
                    ?></p>
                  </td>
                  <td>
                    <img src="<?php echo base_url('foto/admin/transaksi/bukti/' . $trans['bukti_transaksi']) ?>" width="64" />
                  </td>
                  <td>
                    <p><?= $trans['e_tiket'] ?></p>
                  </td>
                  <td>
                    <?php echo anchor('Admin/transaksiDelete/' . $trans['id'], '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?>
                  </td>
                </tr>
                <?php $nomor++; ?>
              <?php endforeach; ?>


            </tbody>

          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>




</section>




<!-- FOOTER -->
</div>