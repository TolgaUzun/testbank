</section>

</div>
<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/menu.js"></script>
<script src="<?= base_url() ?>assets/js/slider.js"></script>
<script>
    $("#giris").click(function(){
        event.stopPropagation();
        $(".login-box").slideToggle();
        $(".register-box").slideToggle();
    });
</script>
</body>
</html>
