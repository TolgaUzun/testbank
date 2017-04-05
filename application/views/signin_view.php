<div class="row sayfa">

    <form role="form" method="post" action="<?= base_url() ?>signin/sign" id="formKayit" class="form-horizontal col-md-8 col-md-offset-2 jumbotron">
        <h3>Üyelik Formu</h3>
        <div class="form-group">
            <label for="ad" class="col-md-2">Adınız:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="ad" name="ad" placeholder="Adınızı yazınız" required>
            </div>
        </div>
        <div class="form-group">
            <label for="soyad" class="col-md-2">Soyadınız:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="soyad" name="soyad" placeholder="Soyadınızı yazınız" required>
            </div>
        </div>
        <div class="form-group">
            <label for="soyad" class="col-md-2">E-Mail:</label>
            <div class="col-md-10">
                <input type="mail" class="form-control" id="mail" name="mail" placeholder="Mail Adresinizi yazınız" required>
            </div>
        </div>
        <div class="form-group">
            <label for="kad" class="col-md-2">Kullanıcı Adınız:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="kad" name="nick" placeholder="Kullanıcı Adınızı yazınız" required />
            </div>
        </div>
        <div class="form-group">
            <label for="pass" class="col-md-2">Şifreniz:</label>
            <div class="col-md-10">
                <input type="password" class="form-control" id="pass" id="pass" name="pass" placeholder="Şifrenizi yazınız" required />
            </div>
        </div>
        <div class="form-group">
            <label for="tpass" class="col-md-2">Şifre Tekrar</label>
            <div class="col-md-10">
                <input type="password" class="form-control" id="tpass" id="tpass" name="tpass" placeholder="Tekrar Şifre yazınız" required />
            </div>
        </div>
        <div class="col-lg-12">
            <button type="submit" class="btn btn-success col-xs-12 col-md-2 btn-lg pull-right" id="kbuton">Kayıt Ol</button>
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
<script>
    $("#tpass").keyup(function(){
        p = $("#pass").val();
        t = $("#tpass").val();
        if (p!=t)
        {
            $("#kbuton").addClass("disabled");
            $("label[for=pass]").addClass("text-danger");
            $("label[for=tpass]").addClass("text-danger");
        }
        else
        {
            $("#kbuton").removeClass("disabled");
            $("label[for=pass]").removeClass("text-danger");
            $("label[for=tpass]").removeClass("text-danger");
        }

        if(p==t)
        {
            $("label[for=pass]").addClass("text-success");
            $("label[for=tpass]").addClass("text-success");
        }
    });
</script>
