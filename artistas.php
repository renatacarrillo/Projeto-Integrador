<?php
  $hiphop_pt = array("Artistas","Sobre");
  $hiphop_en = array("Artist","About");
  $hiphop = array('PT'=> $hiphop_pt,'EN' => $hiphop_en);
// print_r($sertanejo);
//usar $ID para os Vetores
 ?>
 <?php
 //PHP para verificar qual o idioma do html
   include('../imports/idioma.php');
 ?>
 <!DOCTYPE html>
 <html lang ="<?php echo $lang?>">
   <?php
   //importando o head da pagina
     include('../imports/head.php');
   ?>
<body>
  <!--importandoo menu da pagina -->
  <?php
    include('../imports/menu-secundario.php');
  ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <main>
                    <div class="row mt-3 mb-3">
                        <div class="col-12">
                            <h1 class="text-white bg-dark text-center font-italic font-weight-bold"><?php echo $hiphop[$ID][0]?></h1>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-3 col-12 mt-2">
                                <img src="../images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-sm-3 col-12 mt-2">
                                <h2 class="text-muted">Drake</h2>
                                <span class="badge badge-secondary">Top 1</span>
                                <span class="badge badge-secondary">Hip Hop</span>
                                <span class="badge badge-secondary">Rap</span>
                                <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4"><button type="button" class="btn btn-outline-success mt-3">Spotify</button></a></p>
                            </div>
                            <div class="col-sm-6 mt-2">
                                <div class="card border-secondary mb-3" style="max-width: 30rem;">
                                    <div class="card-header"><?php echo $hiphop[$ID][1]?></div>
                                    <div class="card-body text-secondary">
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus orci nec purus aliquet dapibus. Donec ultricies placerat dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce pharetra vulputate gravida.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-12 mt-5">
                                <img src="../images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-sm-3 col-12 mt-5">
                                <h2 class="text-muted">Blackbear</h2>
                                <span class="badge badge-secondary">Top 1</span>
                                <span class="badge badge-secondary">Hip Hop</span>
                                <span class="badge badge-secondary">Rap</span>
                                <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4"><button type="button" class="btn btn-outline-success mt-3">Spotify</button></a></p>
                            </div>
                            <div class="col-sm-6 mt-5">
                                <div class="card border-secondary mb-3" style="max-width: 30rem;">
                                    <div class="card-header"><?php echo $hiphop[$ID][1]?></div>
                                    <div class="card-body text-secondary">
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus orci nec purus aliquet dapibus. Donec ultricies placerat dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce pharetra vulputate gravida.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-12 mt-5">
                                <img src="../images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-sm-3 col-12 mt-5">
                                <h2 class="text-muted">Konai</h2>
                                <span class="badge badge-secondary">Top 1</span>
                                <span class="badge badge-secondary">Hip Hop</span>
                                <span class="badge badge-secondary">Rap</span>
                                <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4"><button type="button" class="btn btn-outline-success mt-3">Spotify</button></a></p>
                            </div>
                            <div class="col-sm-6 mt-5">
                                <div class="card border-secondary mb-3" style="max-width: 30rem;">
                                    <div class="card-header"><?php echo $hiphop[$ID][1]?></div>
                                    <div class="card-body text-secondary">
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus orci nec purus aliquet dapibus. Donec ultricies placerat dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce pharetra vulputate gravida.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 col-12 mt-5">
                                <img src="../images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-sm-3 col-12 mt-5">
                                <h2 class="text-muted">G-eazy</h2>
                                <span class="badge badge-secondary">Top 1</span>
                                <span class="badge badge-secondary">Hip Hop</span>
                                <span class="badge badge-secondary">Rap</span>
                                <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4"><button type="button" class="btn btn-outline-success mt-3">Spotify</button></a></p>
                            </div>
                            <div class="col-sm-6 mt-5">
                                <div class="card border-secondary mb-3" style="max-width: 30rem;">
                                    <div class="card-header"><?php echo $hiphop[$ID][1]?></div>
                                    <div class="card-body text-secondary">
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus orci nec purus aliquet dapibus. Donec ultricies placerat dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce pharetra vulputate gravida.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-sm-3 col-12 mt-5">
                                <img src="../images/hip-hop/defitiniva2.jpg" class="img-fluid" alt="Responsive image">
                            </div>
                            <div class="col-sm-3 col-12 mt-5">
                                <h2 class="text-muted">The Weekend</h2>
                                <span class="badge badge-secondary">Top 1</span>
                                <span class="badge badge-secondary">Hip Hop</span>
                                <span class="badge badge-secondary">Rap</span>
                                <p><a href="https://open.spotify.com/artist/3TVXtAsR1Inumwj472S9r4"><button type="button" class="btn btn-outline-success mt-3">Spotify</button></a></p>
                            </div>
                            <div class="col-sm-6 mt-5">
                                <div class="card border-secondary mb-3" style="max-width: 30rem;">
                                    <div class="card-header"><?php echo $hiphop[$ID][1]?></div>
                                    <div class="card-body text-secondary">
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus orci nec purus aliquet dapibus. Donec ultricies placerat dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce pharetra vulputate gravida.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>
    </div>
    <!-- importando o footer da pagina -->
    <?php
    include('../imports/footer-secundario.php');
  ?>
</body>

</html>
