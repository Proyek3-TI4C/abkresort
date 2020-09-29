<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-5">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Tambah Penginapan</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form action="<?php echo base_url(). 'Admin/penginapanAdd'; ?>" name="form"  onsubmit="return validateForm()" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                            <div class="form-group">
                                <label for="id_kota">Pilih Kota</label>
                                    <select class="form-control" name="id_kota">
                                        <option value="" disabled selected>Pilih Kota</option>

                                        <?php foreach($kota as $kot):?>
                                                    <option value="<?= $kot->id_kota?>"><?= $kot->nama_kota?></option>
                                                <?php  endforeach;?>
                                        
                                    </select>
                            </div>
                        <div class="form-group">
                            <label for="nama_penginapan">Nama Hotel/Villa</label>
                            <input class="form-control" type="text"  name="nama_penginapan" placeholder="example : Hotel Batu Paradise">   
                        </div>

                        <div class="form-group">
                            <label for="jumlah_tamu">Jumlah Tamu</label>
                            <input type="number" class="form-control" name="jumlah_tamu" placeholder="Berapa Orang">
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga *per hari</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text" name="harga" class="form-control" placeholder="Rp.">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="foto">Foto *max size 1MB</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        
                        <input type="hidden" name="post_date" />

                        <script>
                                function validateForm() {
                                var namaPeng = document.forms["form"]["nama_penginapan"].value;
                                var kota = document.forms["form"]["id_kota"].value;
                                var Harga = document.forms["form"]["harga"].value;
                                var tamu = document.forms["form"]["jumlah_tamu"].value;

                                    if(kota == "" && namaPeng == "" && tamu == "" && Harga == ""){
                                        alert("Data penginapan harus diisi");
                                        return false;
                                    }
                                    else if (kota == "" ) {
                                        alert("Kota Harus di Isi");
                                        return false;
                                    }else if (namaPeng == ""){
                                        alert("Nama Harus di Isi");
                                        return false;
                                    }else if (tamu == ""){
                                        alert("Jumlah Tamu Harus di Isi");
                                        return false;
                                    }else if (Harga == ""){
                                        alert("Harga Harus di Isi");
                                        return false;
                                    }
                                }
                        </script>
                        
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Simpan</button>
                        <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tables -->
        <div class="col-md-7">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">List Penginapan</h3>
                </div>
                <!-- FLASH DATA PEMBERITAHUAN -->
                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?> 
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <table id="example1" class="table table-hover table-bordered table-striped table-responsive">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>ID </th>
                            <th>Kota</th>
                            <th>Nama Penginapan</th>
                            <th>Jumlah Tamu</th>
                            <th>Harga(Permalam)</th>
                            <th>Foto</th>                            
                            <th>Menu</th>
                        </tr>
                        </thead>
                        <?php  $nomor =1; ?>
						<?php
                        $this->db->select('id_penginapan, nama_kota,nama_penginapan, jumlah_tamu, harga, foto');
                        // SELECT 
                        $query =  $this->db->join('kota', 'kota.id_kota = penginapan.id_kota')->get('penginapan');
                        $nomor = 1;

						foreach ($query->result_array() as $peng) :
							?>
							<tr>
							<td><?php echo $nomor; ?></td>
								<td>
									<p><?= $peng['id_penginapan'] ?></p>
								</td>
								<td>
									<p><?= $peng['nama_kota'] ?></p>
								</td>
								<td>
									<p><?= $peng['nama_penginapan'] ?></p>
								</td>
								<td>
									<p><?= $peng['jumlah_tamu'] ?></p>
								</td>
								<td>
                                <p>Rp. <?= number_format($peng['harga']) ?></p>
								</td>

								<td>
                                <img src="<?php echo base_url('foto/admin/penginapan/'.$peng['foto']) ?>" width="64" />
								</td>
                                <td>
                                    <?php  echo anchor('Admin/penginapanEdit/'.$peng['id_penginapan'],'<button class="btn btn-success margin" type="button"><span class="fa fa-pencil"></span> </button>'); ?>
                                    <?php echo anchor('Admin/penginapanDelete/'.$peng['id_penginapan'],'<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span> </button>'); ?> 

                                </td>
                                

                               
							</tr>
							<?php $nomor++; ?>
						<?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
</div>


