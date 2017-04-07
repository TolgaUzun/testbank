<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 cat-select">
        <div class="row">
            <p id="kbilgi" class="col-md-4 pull-right">
                <a href="profil.php" title="profilim">
                    <img src="assets/images/users.png" class="img img-circle hidden-xs" height="50" width="50" alt="kresim"/>&nbsp;
                    <strong><?php echo $this->session->nick; ?></strong>
                </a>
            </p>
            <h3 class="col-md-8 text-danger text-left pull-left">Teste başlamak için kategori seçin</h3>
        </div>

        <ol id="cat">
            <?php
            foreach($kgetir as $fek)
            {
                ?>
                <li>

                    <a href="soru.php?kat=<?php echo $fek->kategori_id ?>" class="btn btn-danger btn-big">
                        <?php
                        if ($fek->kategori_id == 1){
                            echo '<i class=" fa fa-graduation-cap fa-3x"></i>';
                        }else if ($fek->kategori_id == 2){
                            echo '<i class="fa fa-flask fa-3x"></i>';
                        }else if ($fek->kategori_id == 3){
                            echo '<i class="fa fa-globe fa-3x"></i>';
                        }else if ($fek->kategori_id == 4){
                            echo '<i class="fa fa-shield fa-3x"></i>';
                        }else if ($fek->kategori_id == 5){
                            echo '<i class="fa fa-moon-o fa-3x"></i>';
                        }else if ($fek->kategori_id == 6){
                            echo '<i class="fa fa-trophy fa-3x"></i>';
                        }else if ($fek->kategori_id == 7){
                            echo '<i class="fa fa-university fa-3x"></i>';
                        }
                        ?>

                        <br />
                        <?php echo $fek->kategori_adi ?>
                    </a>
                </li>
            <?php } ?>
        </ol>
    </div>
</div>
<div class="row">
    <div class="panel panel-warning">
        <div class="col-md12">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-exclamation-triangle"></i> Uyarılar</h3>
            </div>
            <div class="panel-body bg-warning">
                <h6>Yarışmaya başlamadan önce lütfen <a href="kurallar.php">YARIŞMA KURALLARI</a>'nı okuyunuz</h6>
                <h6>DİKKAT: Yarışma süresince, İnternet Tarayıcınızın İLERİ / GERİ tuşlarına basmayınız, hiç bir sayfayı REFRESH / YENİLE yapmayınız. Aksi halde yarışma sona erdirilecektir.</h6>
            </div>
        </div>
    </div>
</div>