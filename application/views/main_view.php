<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="row">
		<div class="col-md-12 visible-xs-block regxs">
				<a href="kayit.php" target="_self" class="btn btn-danger" id="kayit"><i class="fa fa-child"></i> Hemen üye ol ve yarışmaya başla</a>
		</div>
		<div class="col-md-12 visible-xs-block uyexs">
				<a href="#" target="_self" class="btn btn-warning" id="giris"><i class="fa fa-user"></i> Üye Girişi</a>
		</div>

		<div class="col-md-4 col-xs-12 login-box">
            <h3 class="hidden-xs">Üye girişi</h3>
            <form role="form" method="post" action="<?= base_url("main/login") ?>">
                    <div class="form-group">
                            <label for="kadi">Kullanıcı Adı:</label>
                            <input type="text" class="form-control" id="kadi" name="kadi" placeholder="kullanıcı adınızı yazın" required autocomplete="off">
                    </div>
                    <div class="form-group">
                            <label for="pass">Şifre:</label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="şifrenizi girin" required>
                    </div>
                    <div class="checkbox">
                            <label>
                                    <input type="checkbox" name="cookie">
                                    Beni hatırla
                            </label>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg pull-right">Giriş</button>
            </form>

            <?php if (!empty($baslik)){ echo $baslik; }?>

		</div>
		<div class="col-md-8 col-xs-12 register-box hidden-xs" id="register">
				<p class="baslik">Farklı kategorilerde yüzlerce soru</p>
				<a href="<?= base_url() ?>signin" target="_self" class="btn btn-warning register-button hidden-xs" style="z-index:5;">Hemen üye ol ve yarışmaya başla</a>
				<div id="slider">
						<ol>
								<li>
										<div class="slide">
												<div class="sli-img">
														<img src="<?= base_url() ?>assets/images/bilim.jpg" alt="bilim">
												</div>
												<div class="sli-text">
												</div>
												<h1>Bilim</h1>
										</div>
								</li>
								<li>
										<div class="slide">
												<div class="sli-img">
														<img src="<?= base_url() ?>assets/images/Geography.jpg" alt="cografya">
												</div>
												<div class="sli-text">
												</div>
												<h1>Coğrafya</h1>
										</div>
								</li>
								<li>
										<div class="slide">
												<div class="sli-img">
														<img src="<?= base_url() ?>assets/images/din.jpg" alt="din">
												</div>
												<div class="sli-text">
												</div>
												<h1>Din</h1>
										</div>
								</li>
								<li>
										<div class="slide">
												<div class="sli-img">
														<img src="<?= base_url() ?>assets/images/spor.jpg" alt="spor">
												</div>
												<div class="sli-text">
												</div>
												<h1>Spor</h1>
										</div>
								</li>
								<li>
										<div class="slide">
												<div class="sli-img">
														<img src="<?= base_url() ?>assets/images/tarih.jpg" alt="tarih">
												</div>
												<div class="sli-text">
												</div>
												<h1>Tarih</h1>
										</div>
								</li>
								<li>
										<div class="slide">
												<div class="sli-img">
														<img src="<?= base_url() ?>assets/images/sanat.jpeg" alt="sanat">
												</div>
												<div class="sli-text">
												</div>
												<h1>Sanat</h1>
										</div>
								</li>
						</ol>
				</div>
				<div id="banner" class="col-md-1"></div>
		</div>
		<div id="siralar"></div>
</div>
<div class="row indexbilgi">
		<div class="col-md-12">
				<div class="panel panel-warning">
						<div class="panel-heading">
								<i class="fa fa-info-circle"></i> Test Bank Hakkında
						</div>
						<div class="panel-body">
								<h2>Test Banka hoşgeldiniz.</h2>
								<p>Haftalık olarak düzenlene yarışmamızda; Tarih, Coğrafya, Sanat/Edebiyat, Din, Spor, Bilim ve Genel Kültür kategorilerinde
										binlerce soru arasından rastgele olarak yirmibeş soru sorulmaktadır. Sıralamaya girebilmek için herhangi bir kategoride rakiplerinizi geçmeniz
										gerekmekte.</p>
								<p>Yüzde yüz mobil uyumluluk özelliği olan yarışmamız, sizlere cep telefonu ya da tabletten istediğiniz
										yerde yarışma heyecanı vaadediyor. Tanıdıklarınızı sitemize davet edin karşılıklı yarışın.</p>
								<p>İyi eğlenceler</p>
						</div>
				</div>
		</div>
</div>
