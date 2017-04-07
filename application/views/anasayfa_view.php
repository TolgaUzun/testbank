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

                    <a href="anasayfa_view.php?id=<?= $fek->kategori_id ?>"  data-target="#myModal<?= $fek->kategori_id ?>" data-toggle="modal" class="btn btn-danger btn-big">
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
                    <!-- Modal -->
                    <div class="modal fade" id="myModal<?= $fek->kategori_id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title"><?= $fek->kategori_adi ?></h4>

                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <input type="hidden" name="kategori" value="<?= $fek->kategori_id?>">
                                        <div class="form-group">
                                            <label>Soru Sayısı</label>
                                            <select name="soruSayisi" class="form-control">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <button type="button" class="btn btn-primary col-md-12">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
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