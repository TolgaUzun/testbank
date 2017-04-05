<div class="row sayfa">
    <div class="alert alert-info">
        <i class="fa fa-exclamation"></i> Aşağıdaki formu eksiksiz doldurun. Sorunuz kontrol edildikten sonra teste dahil edilecektir. Katkınızdan dolayı teşekkür ederiz.
    </div>
    <form role="form" method="post" action="<?= base_url("sorukayit/insert") ?>" id="form" class="form-horizontal col-md-8 col-md-offset-2 jumbotron">
        <h3>Soru Girişi</h3>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon" for="soru">Soru:</span>
                <textarea class="form-control" name="soru" rows="4" placeholder="Soru Metni" style="resize:vertical;" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span for="a" class="input-group-addon">A :</span>
                <input type="text" autocomplete="Off" class="form-control" name="a" placeholder=" A şıkkı" required>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span for="b" class="input-group-addon" >B :</span>
                <input type="text" autocomplete="Off" class="form-control" name="b" placeholder=" B şıkkı" required>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span for="c" class="input-group-addon">C :</span>
                <input type="text" autocomplete="Off" class="form-control" name="c" placeholder=" C şıkkı" required>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <span for="d" class="input-group-addon">D :</span>
                <input type="text" autocomplete="Off" class="form-control" name="d" placeholder=" D şıkkı" required>
            </div>
        </div>
        <div class="form-group">
            <span for="d" class="col-md-2">Doğru Şık :</span>
            <div class="col-md-8">

                <label class="radio-inline">
                    <input type="radio" name="dogru" value="a">
                    A</label>

                <label class="radio-inline">
                    <input type="radio" name="dogru" value="b">
                    B</label>

                <label class="radio-inline">
                    <input type="radio" name="dogru" value="c">
                    C</label>

                <label class="radio-inline">
                    <input type="radio" name="dogru" value="d">
                    D</label>


            </div>
        </div>
        <div class="form-group">

            <span for="kategori" class="col-md-2">Kategori :</span>
            <div class="col-md-8">
                <select class="form-control" name="kategori">
                    <?php
                    foreach ($kategori as $kat)
                    {
                        echo "<option value='$kat->kategori_id'>";
                        echo "$kat->kategori_adi";
                        echo "</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-10">
                <button type="submit" class="btn btn-success btn-lg pull-right">Gönder</button>
            </div>
        </div>
        <?php
        if (!empty($msg)) {
            ?>
            <div class="col-lg-12">
                <div class="alert alert-success"><?= $msg ?></div>
            </div>
            <?php
        }
        ?>
    </form>

</div>