<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('node_modules/') ?>bootstrap/dist/css/bootstrap.css">
  <title>Kereta Api</title>
</head>

<body>
  <div class="aem-Grid aem-Grid--12 aem-Grid--default--12  ">

    <div class="slideshow aem-GridColumn aem-GridColumn--default--12">
      <!-- Slideshow -->

      <div class="slideshow-image full-width">



        <div style="position:relative">
          <img src="<?= base_url('assets/') ?>img/bannerkereta.jpeg" class="d-block w-100" height="100%" alt="Slideshow">
        </div>


      </div>

      <!-- End of Slideshow -->

    </div>
    <div class="book-flight-partner aem-GridColumn aem-GridColumn--default--12">

      <div class="col-lg-3 col-md-5 col-sm-6 col-xs-12 parent-book-partner no-gutters p-0" style="top: 114px;">
        <div class="card" style="border: 0;border-radius: 0 !important;border-top: 3px solid #6553a2;box-shadow: 0px 0px 2px #6553a2;">
          <form id="book-flight-form" novalidate="novalidate">
            <div class="card-header indt-book-header">
              BELI TIKET KERETA API
            </div>
            <div class="card-block indt-book-body">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fas fa-train"></i></span>
                <input id="origin" name="origin" type="text" class="form-control ui-autocomplete-input" placeholder="From" aria-describedby="basic-addon1" autocomplete="off">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><i class="fas fa-warehouse"></i></span>
                <input id="destination" name="destination" type="text" class="form-control ui-autocomplete-input" placeholder="To" aria-describedby="basic-addon1" autocomplete="off">
              </div>
              <br>
              <div class="row">
                <div class="col-12" id="parent-first-flight">
                  <div class="form-group">
                    <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Depart" aria-describedby="basic-addon1">
                  </div>
                </div>
                <div class="col-6 col-md-6 p-l-small" id="parent-second-flight" style="display: none;">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><span class="lnr lnr-calendar-full"></span></span>
                    <input type="text" class="form-control" readonly="" id="second-flight-date" name="second-flight-date" placeholder="Return" aria-describedby="basic-addon1">
                  </div>
                </div>
              </div>
              <div class="row">

                <div class="col-4 col-md-4 p-r-0">
                  <div class="input-group">
                    <select id="paxAdult" class="form-control valid" aria-invalid="false">
                      <option value="0">0 Adults</option>
                      <option value="1" selected="selected">1 Adults</option>
                      <option value="2">2 Adults</option>
                      <option value="3">3 Adults</option>
                      <option value="4">4 Adults</option>
                      <option value="5">5 Adults</option>
                      <option value="6">6 Adults</option>
                      <option value="7">7 Adults</option>
                      <option value="8">8 Adults</option>
                      <option value="9">9 Adults</option>
                    </select>
                  </div>
                </div>

                <div class="col-4 col-md-4 p-l-7">
                  <div class="input-group">
                    <select id="paxInfant" class="form-control">
                      <option value="0" selected="selected">0 Infants</option>
                      <option value="1">1 Infants</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>


    <!-- Result -->

    <br><br><br><br><br><br><br>
    <div class="container">
      <?php
                                $this->db->select(
                                  ' t.id_transport as id,
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
                                $query = $this->db->get_where('transport as t', array('jt.nama_transport' => 'Kereta'));
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
              <h1 class="card-title pricing-card-title"><?= $trans['jam_berangkat'] ?> - <?= $trans['jam_tiba'] ?></h1>
              <h4><?= $trans['berangkat'] ?> - <?= $trans['tiba'] ?></h4>
              <h5><?= $trans['nama_class'] ?></h5>
              <h5>Rp. <?= number_format($trans['harga']) ?></h5>
            </div>
            <button type="button" class="btn btn-lg btn-block btn-primary">Pesan</button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>


</body>

</html>