<div class="row sayfa">
    <div class="jumbotron alan">
        <h4>Kategori : </h4> <h5><?=$this->input->post("kategoriAdi") ?></h5>
        <h4>Soru Sayısı : </h4> <h5><?=$this->input->post("soruSayisi") ?></h5>
    </div>
    <form action="<?= base_url("soru/cevapla")?>" method="post">
        <input type="hidden" name="soruSayisi" value="<?=$this->input->post("soruSayisi") ?>">
        <?php
        $dogru = 0;
        $yanlis = 0;
        $sayi = 1;
        $alert = "";
        $dogruYanit="";

        foreach ($rows as $row){

            ?>
            <div class="jumbotron soru <?=$alert?>">

                <p><span style="color: darkred;"><?= $sayi." - "; ?></span> <?= $row->soru_text; ?></p>
                <input type="hidden" name="sid" value="<?=$row ->soru_id; ?>" />
                <div class="radio">
                    <label >
                        <input type="radio" name="soru<?= $sayi ?>"  value="a" >
                        <?=$row->soru_a; ?>
                    </label>
                </div>
                <div class="radio">
                    <label >
                        <input type="radio" name="soru<?= $sayi ?>"  value="b" >
                        <?=$row->soru_b; ?>
                    </label>
                </div>
                <div class="radio">
                    <label >
                        <input type="radio" name="soru<?= $sayi ?>"  value="c" >
                        <?=$row->soru_c; ?>
                    </label>
                </div>
                <div class="radio">
                    <label >
                        <input type="radio" name="soru<?= $sayi ?>"  value="d" >
                        <?=$row->soru_d; ?>
                    </label>
                </div>
            </div>

            <?php


            $sayi=$sayi+1;

        }

        ?>

        <button type="submit" name="tamamla" class="btn btn-success btn-lg center-block">Testi Tamamla</button>
    </form>
    <?php echo "doğru sayınız : " .$dogru; ?><br>
    <?php echo "yanlis sayınız : " .$yanlis; ?><br>
</div>