<div class="row sayfa">
    <div class="jumbotron alan">
        <h4>Kategori : </h4> <h5><?=$this->input->post("kategoriAdi") ?></h5>
        <h4>Soru Sayısı : </h4> <h5><?=$this->input->post("soruSayisi") ?></h5>
    </div>
    <form action="<?= base_url("soru/yanitla") ?>" method="post">
        <?php
        $sayi = 1;
        foreach ($rows as $row){
            ?>
            <div class="jumbotron soru">

                <p><span style="color: darkred;"><?= $sayi." - "; ?></span> <?= $row->soru_text; ?></p>
                <input type="hidden" name="sid" value="<?=$row ->soru_id; ?>" />
                <div class="radio">
                    <label>
                        <input type="radio" name="soru<?= $row->soru_id ?>"  value="a" >
                        <?=$row->soru_a; ?>
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="soru<?= $row->soru_id ?>"  value="b" >
                        <?=$row->soru_b; ?>
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="soru<?= $row->soru_id ?>"  value="c" >
                        <?=$row->soru_c; ?>
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="soru<?= $row->soru_id ?>"  value="d" >
                        <?=$row->soru_d; ?>
                    </label>
                </div>
            </div>

            <?php
            $sayi=$sayi+1;

        }

        ?>
        <button type="submit" class="btn btn-success btn-lg center-block">Testi Tamamla</button>
    </form>

</div>