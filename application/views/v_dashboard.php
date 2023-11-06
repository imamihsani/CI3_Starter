<!-- Begin Page Content -->
<div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12 text-gray-900">
                        <div class="card shadow mb-4" style="background-position:center;background-repeat: no-repeat;background-size: cover;background-image: url(assets/img/tech.webp);">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Home</h6>
                            </div>
                            <div class="card-body">
                                <article class="font-weight-bold text-white">
                                    <figure class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/img/logo_pt.png" alt="PT LOGO" style="width:10%">
                                    </figure>
                                    <section>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat quia, laborum provident esse cupiditate nulla illum deserunt molestias labore enim doloremque dicta eveniet libero debitis officia itaque mollitia dolorem facere.
                                    </section>
                                </article>
                            </div>
                            <div class="card-body">
                                <div class="accordion" id="accordionVM">
                                    <div class="card">
                                        <div class="card-header" id="headingLagu">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseLagu" aria-expanded="true" aria-controls="collapseLagu">
                                                <i class="fa fa-music" aria-hidden="true"></i> Lagu Resmi
                                            </button>
                                        </h2>
                                        </div>

                                        <div id="collapseLagu" class="collapse" aria-labelledby="headingLagu" data-parent="#accordionVM">
                                            <div class="card-body">
                                            <label><b>Indonesia Raya</b></label>
                                            <div class="action-btns">
                                                <button class="btn play btn-sm btn-success" id="play_IR"><i class="fa fa-play-circle" aria-hidden="true"></i> Play</button>
                                                <button class="btn pause btn-sm btn-secondary" id="pause_IR"><i class="fa fa-pause-circle" aria-hidden="true"></i> Pause</button>
                                            </div>
                                            <p id="statusText_IR" class="mt-1">Audio Dimatikan</p>
                                            <script>
                                                let playBtnIR = document.getElementById("play_IR");
                                                let pauseBtnIR = document.getElementById("pause_IR");
                                                let statusTextIR = document.getElementById("statusText_IR");

                                                const audioIR = new Audio("./assets/audio/IndonesiaRaya.mp3");

                                                playBtnIR.addEventListener("click", (e) => {
                                                    audioIR.play();
                                                    statusTextIR.innerHTML = "Audio Dimainkan🔊";
                                                });

                                                pauseBtnIR.addEventListener("click", (e) => {
                                                    audioIR.pause();
                                                    statusTextIR.innerHTML = "Audio Dimatikan";
                                                });
                                            </script>
                                            

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



