<body style="background: url('../assets/img/tech.webp');background-size: 100%;background-position:center;background-repeat: no-repeat;">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-9 col-lg-12 col-md-9 my-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-gray-300">
                                <img src="<?php echo base_url(); ?>assets/img/logo_pt.png" alt="RSU AMANAH SUMPIUH" style="width: 50%;display: block;margin-left: auto;margin-right: auto;size:100px;padding:20px;">
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
                                        (+62) 81-234-567-890 <br>
                                        <i class="fas fa-envelope"></i>
                                        ihsaniimam@gmail.com <br>
                                        <i class="fas fa-globe"></i>
                                        imamihsani.com
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b>LOGIN</b></h1>
                                    </div>
                                    <form class="user" method="post" action="<?php echo base_url(); ?>auth/login/proses">
                                        <?php
                                        if ($this->session->flashdata('error') != '') {
                                            echo '<div class="alert alert-danger" role="alert">';
                                            echo $this->session->flashdata('error');
                                            echo '</div>';
                                        }
                                        ?>

                                        <?php
                                        if ($this->session->flashdata('success_register') != '') {
                                            echo '<div class="alert alert-info" role="alert">';
                                            echo $this->session->flashdata('success_register');
                                            echo '</div>';
                                        }
                                        ?>
                                        <div class="form-group">
                                            <input type="username" name="username" id="username" class="form-control form-control-user" placeholder="Username" required autofocus>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" class="form-control form-control-user" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="showPassword">
                                                <label class="custom-control-label" for="showPassword">Show Password</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Masuk
                                        </button>
                                    </form>
                                    <!-- <hr>
                                    <div class="text-center">
                                        <a class="small" href="#">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?php echo base_url(); ?>auth/register">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>