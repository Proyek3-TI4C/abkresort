<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('node_modules/') ?>bootstrap/dist/css/bootstrap.css">
  <title>Bis</title>
</head>

<body>

  <div class="aem-Grid aem-Grid--12 aem-Grid--default--12  ">

    <div class="slideshow aem-GridColumn aem-GridColumn--default--12">
      <!-- Slideshow -->

      <div class="slideshow-image full-width">



        <div style="position:relative">
          <img src="<?= base_url('assets/') ?>img/bannerbus.jpg" class="d-block w-100" height="100%" alt="Slideshow">
        </div>


      </div>

      <!-- End of Slideshow -->

    </div>
    <div class="book-flight-partner aem-GridColumn aem-GridColumn--default--12">

      <div class="col-lg-3 col-md-5 col-sm-6 col-xs-12 parent-book-partner no-gutters p-0" style="top: 114px;">
        <div class="card" style="border: 0;border-radius: 0 !important;border-top: 3px solid #6553a2;box-shadow: 0px 0px 2px #6553a2;">
          <form id="book-flight-form" novalidate="novalidate" method="POST">
            <div class="card-header indt-book-header">
              PESAN TIKET BIS
            </div>
            <div class="card-block indt-book-body">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
                <input id="origin" name="origin" type="text" class="form-control ui-autocomplete-input" placeholder="Kota Keberangkatan" aria-describedby="basic-addon1" autocomplete="off">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fas fa-map-marker-alt"></i></span>
                <input id="origin" name="origin" type="text" class="form-control ui-autocomplete-input" placeholder="Kota Tujuan" aria-describedby="basic-addon1" autocomplete="off">
              </div>
              <br>
              <div class="row">
                <div class="col-12" id="parent-first-flight">
                  <div class="form-group">
                    <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Pilih Tanggal" aria-describedby="basic-addon1">
                  </div>
                </div>
              </div>


            </div>
            <div class="card-footer text-muted" style="padding: 0;">
              <button id="searchTravel" type="submit" class="btn btn-primary btn-book-flight">CARI WISATA</button>
            </div>
          </form>
        </div>
      </div>

    </div>
    <div class="livefyre-carousel aem-GridColumn aem-GridColumn--default--12"></div>

    <div class="new newpar section aem-Grid-newComponent">

    </div>

  </div>

  <!-- Result -->

  <br><br><br><br><br><br>

  <div class="container">
    <h1>Hasil Pencarian :</h1>
    <?php 
    $this->db->select(
			't.id_transport as id,
			c.nama_class,
			jt.nama_transport,
			t.nama_transp,
			t.tanggal,
			tt.nama_tempat as berangkat,
			tb.nama_tempat as tiba,
			t.jam_berangkat,
			t.jam_tiba,
			t.kisaran,
			t.harga
			'
		);
		
		$this->db->join('class as c', 'c.id_class = t.class');
		$this->db->join('jenis_transport as jt', 'jt.id_transport = t.jenis_transport');
		$this->db->join('tempat_transport as tb', 'tb.id_tempat = t.tempat_tujuan');
		$this->db->join('tempat_transport as tt', 'tt.id_tempat = t.tempat_asal');
		$query = $this->db->get_where('transport as t', array('jt.nama_transport' => 'Bus'));
		// $query =  ->get('transport as t');
		$nomor = 1;
		foreach ($query->result_array() as $trans) :
    ?>
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal"><?= $trans['nama_transp'] ?></h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title"><?= $trans['berangkat'] ?> - <?= $trans['tiba'] ?></h1>
          <h4><?= $trans['nama_class'] ?> </h4>
          <h5><?= $trans['tanggal'] ?> - <?= $trans['jam_berangkat'] ?></h5>
          <h5>Rp. <?= number_format($trans['harga'])?></h5>
        </div>
        <button type="button" class="btn btn-lg btn-block btn-primary">Pesan</button>
      </div>
    </div>
    <?php endforeach; ?>
  </div>



</body>

</html>