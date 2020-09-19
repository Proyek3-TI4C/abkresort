<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('node_modules/') ?>bootstrap/dist/css/bootstrap.css">
    <title>All In One</title>
</head>

<body>

    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12  ">
        <div class="slideshow aem-GridColumn aem-GridColumn--default--12">
            <!-- Slideshow -->
            <div class="slideshow-image full-width">
                <div style="position:relative">
                    <img src="<?= base_url('assets/') ?>img/allinone.jpg" class="d-block w-100" height="100%" alt="Slideshow">
                </div>
            </div>
            <!-- End of Slideshow -->
        </div>
    </div>
    <div class="container mt-5">
        <div class="container jumbotron">
            <h1 class="text-center">Choose your Want</h1>
            <br>
            <form action="">
                <div class="form row">
                    <div class="col-md-4">
                        <div class="form-group form-check">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input styled-checkbox" id="mobil">
                                <label class="custom-control-label" for="mobil" data-toggle="collapse" href="#mobil">Mobil</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="pesawat">
                                <label class="custom-control-label" for="pesawat" data-toggle="collapse" href="#pesawat">Pesawat</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="bis">
                                <label class="custom-control-label" for="bis" data-toggle="collapse" href="#bis">Bis</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="kereta">
                                <label class="custom-control-label" for="kereta" data-toggle="collapse" href="#kereta">Kereta</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="hotel">
                                <label class="custom-control-label" for="hotel" data-toggle="collapse" href="#hotel">Hotel</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="wisata">
                                <label class="custom-control-label" for="wisata" data-toggle="collapse" href="#wisata">Wisata</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="note">
                                <label class="custom-control-label" for="note" data-toggle="collapse" href="#note">Lain-Lain</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slideshow -->
        </div>
        </form>
        <div class="row">
            <div class="col-md-7"></div>
            <div class="col-md-5">
                <button type="button" class="btn btn-primary btn-block">Pesan</button>
            </div>
        </div>
        <!-- Collapse bis -->
        <div class="collapse" id="bis">
            <div class="card card-body">
                <div class="container">
                    <h2>Bis</h2>
                    <form>
                        <div class="form-row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="#">Kota Keberangkatan</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="#">Kota Tujuan</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="#">Pilih Tanggal</label>
                                <input type="date" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-in" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <!-- End Collapse bis -->
        <!-- Collapse Wisata -->
        <div class="collapse" id="wisata">
            <div class="card card-body">
                <div class="container">
                    <h2>Wisata</h2>
                    <form>
                        <div class="form-row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="#">Tujuan</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="#">Dari</label>
                                <input type="date" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-in" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="#">Hingga</label>
                                <input type="date" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-in" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
        <!-- End Collapse Wisata -->

        <!-- Collapse pesawat -->
        <div class="collapse" id="pesawat">
            <div class="card card-body">
                <div class="container">
                    <h2>Pesawat</h2>
                    <form>
                        <div class="form row">
                            <div class="form-group col-md-5">
                                <label for="#">Form</label>
                                <input type="text" class="form-control" id="" placeholder="#">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="#">To</label>
                                <input type="text" class="form-control" id="" placeholder="#">
                            </div>
                        </div>
                        <div class="form row">

                            <div class="form-group col-md-9">
                                <label for="#">Pilih Tanggal</label>
                                <input type="date" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-in" aria-describedby="basic-addon1">
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputState">Penumpang</label>
                                <select id="inputState" class="form-control">
                                    <option selected>0 Penumpang</option>
                                    <option>1 Penumpang</option>
                                    <option>2 Penumpang</option>
                                    <option>3 Penumpang</option>
                                    <option>4 Penumpang</option>
                                </select>
                            </div>


                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="#">Class</label>
                                <select id="inputState" class="form-control">
                                    <option selected>Economy class</option>
                                    <option>Bussines class</option>
                                    <option>First class</option>
                                </select>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <br>
        <!-- End Collapse Pesawat -->

        <!-- Collapse All in one Hotel -->
        <div class="collapse" id="hotel">
            <div class="card card-body">
                <div class="container">
                    <h2>Hotel</h2>
                    <form>
                        <div class="form-row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="#">Nama Hotel/Kota</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-in" aria-describedby="basic-addon1">
                                </div>

                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-Out" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class=" col-md-6">
                                <label for="inputState">Orang</label>
                                <select id="inputState" class="form-control">
                                    <option selected>0 Orang</option>
                                    <option>1 Orang</option>
                                    <option>2 Orang</option>
                                    <option>3 Orang</option>
                                    <option>4 Orang</option>
                                </select>
                            </div>
                        </div>

                </div>

            </div>
        </div>
        <br>
        <!-- End Collapse Hotel -->

        <!-- collapse mobil -->
        <div class="collapse" id="mobil">
            <div class="card card-body">
                <div class="container">
                    <h2>Mobil</h2>
                    <form>
                        <div class="form-row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="#">Pengambilan</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="#">Tanggal Pengambilan</label>
                                <input type="date" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-in" aria-describedby="basic-addon1">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="#">Check Pengembalian</label>
                                <input type="date" onfocus="(this.type='date')" class="form-control" id="datetimepicker1" name="first-flight-date" placeholder="Check-in" aria-describedby="basic-addon1">
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <br>
        <!-- End Collapse Mobil -->

        <!-- Collapse Kereta Api -->
        <div class="collapse" id="kereta">
            <div class="card card-body">
                <div class="container">
                    <h2>Kereta</h2>
                    <form action="">
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="#">Form</label>
                                <input type="text" class="form-control" id="" placeholder="#">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="#">To</label>
                                <input type="text" class="form-control" id="" placeholder="#">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputState">Dewasa</label>
                                <select id="inputState" class="form-control">
                                    <option selected>0 Penumpang</option>
                                    <option>1 Penumpang</option>
                                    <option>2 Penumpang</option>
                                    <option>3 Penumpang</option>
                                    <option>4 Penumpang</option>
                                </select>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputState">Penumpang</label>
                                <select id="inputState" class="form-control">
                                    <option selected>0 Penumpang</option>
                                    <option>1 Penumpang</option>
                                    <option>2 Penumpang</option>
                                    <option>3 Penumpang</option>
                                    <option>4 Penumpang</option>
                                </select>
                            </div>
                            <div class="form-group col-md-9">
                                <div class="form-group">
                                    <label for="#">Depart</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Collapse Train -->
        <div class="collapse" id="note">
            <div class="card card-body">
                <div class="container">
                    <h2>Tambah Catatan</h2>
                    <div class="form-group">
                        <label for="textarea">Permintaan Khusus</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                </div>

            </div>
        </div>
        <br>

    </div>
</body>

</html>