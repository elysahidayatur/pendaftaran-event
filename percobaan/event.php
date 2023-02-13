<!DOCTYPE html>
<html>
    <head>
        <title>Form registrasi</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="js/bootstrap.js">
        <link rel="stylesheet" type="text/css" href="style2.css">
          

    </head>
    <body>
        <form class ="pendaftaran_event.php">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-left">Bootstrap Registration Form</h1>
                    <p class="text-left">make sure the email you enter is an email that is still active <br>
                        and frequently used. This email will also be the email <br>
                        that will be used in the registration form</p>
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
                                <label class="label col-md-2 control-label">Nama Event</label>
                                <div class="col-md-10">
                                    <input type="nama" class="form-control" name="nama_event" placeholder="nama">
                                </div>
                            </div>
                            <div class="row">
                                <label class="label col-md-2 control-label">Tanggal Event</label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control" name="tgl_event" placeholder="email">

                                </div>
                            </div>
                            <div class="row">
                                <label class="label col-md-2 control-label">Informasi Event</label>
                                <div class="col-md-10">
                                    <input type="informasi_event" class="form-control" name="informasi_event" placeholder="tanggal laahir">

                                </div>                    
                            </div>
                            <a href="pendaftaran_event.php"><div class="btn btn-primary">Submit</div></a>
                            <a href="index.php"><div class="btn btn-primary">Cancel</div></a>
    </body>
</html>