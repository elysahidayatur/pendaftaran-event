<!DOCTYPE html>
<html>
    <head>
        <title>Form registrasi</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
        <link rel="stylesheet" type="text/css" href="style2.css">
          

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-left">Bootstrap Registration Form</h1>
                    </div>
                <div class="col-md-5">
                    <!--make a 2 colum of 6-->
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-left">Registrasi Form</h3>
                            </div>
                            <div class="col-md-6">
                                <span class="glyphicon glyphicon-pencil"></span></div>
                            </div>
                            <hr>
                            <div class="row">
                                <label class="label col-md-2 control-label">Nama</label>
                                <div class="col-md-10">
                                    <input type="nama" class="form-control" name="nama" placeholder="nama">
                                </div>
                            </div>
                            <div class="row">
                                <label class="label col-md-2 control-label">Email</label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control" name="email" placeholder="email">

                                </div>
                            </div>
                            <div class="row">
                                <label class="label col-md-2 control-label">Tanggal Lahir</label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="tanggal laahir">

                                </div>
                            </div>
                            <div class="row">
                                <label class="label col-md-2 control-label">Alamat</label>
                                <div class="col-md-10">
                                    <input type="alamat" class="form-control" name="alamat" placeholder="alamat">
                                </div>
                            </div>
                            <a href="data_pendaftaran.php"><div class="btn btn-primary">Submit</div></a>
                            <a href="data_pendaftaran.php"><div class="btn btn-primary">Cancel</div></a>
    </body>
</html>