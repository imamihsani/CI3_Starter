<body style="background: url('../assets/img/Register.jpg');background-size: 100%;background-position:center;background-repeat: no-repeat;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-9 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-gray-300">
                                <div class="my-5">
                                    <img src="<?php echo base_url(); ?>assets/img/logo_pt.png" alt="PT IMXX" style="width: 50%;display: block;margin-left: auto;margin-right: auto;size:100px;padding:20px;">
                                    <div class="text-center h4 text-gray-900 mb-4">
                                        <h4><b>PT IMXX</b></h4>
                                        <p style="text-align: left;margin-left:55px;font-size: 14px;">
                                            <i class="fas fa-street-view"></i>
                                            Pondok Pinang, Jakarta Selatan, DKI Jakarta <br>
                                            <i class="fab fa-facebook"></i>
                                            PT IMXX <br>
                                            <i class="fab fa-instagram"></i>
                                            imam.ihsan_ <br>
                                            <i class="fab fa-whatsapp"></i>
                                            (+62) 81-290-231-840 <br>
                                            <i class="fas fa-envelope"></i>
                                            ihsaniimam@gmail.com <br>
                                            <i class="fas fa-globe"></i>
                                            imamihsani.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b>REGISTER</b></h1>
                                        <?php echo $this->session->flashdata('success_register');?>
                                    </div>
                                    <form class="user" method="post" action="<?php echo base_url(); ?>auth/register/proses">
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user" id="username" name="username" placeholder="Username" required autofocus autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password" required autocomplete="off">
                                        </div>
                                        <div class="form-group">
                                            <input type="nama" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama" required autocomplete="off">
                                        </div>
                                         <div class="form-group">
                                            <input type="nip" class="form-control form-control-user" id="nip" name="nip" placeholder="NIP" required>
                                        </div>
                                        <select class="form-control" name="role" id="role" required>
                                            <option value="">---Pilih Role---</option>
                                            <option value="1">1</option>
                                        </select> <br>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="showPassword">
                                                <label class="custom-control-label" for="showPassword">Show Password</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>