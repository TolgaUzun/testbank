<?php $this->load->view("yonetim/include/header"); ?>


<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Onaysız Sorular
        <small>Onaylanmamış Sorular Bu Sayfada</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url("admin") ?>"><i class="fa fa-dashboard"></i> Anasayfa</a></li>
        <li class="active">Onaysız Sorular</li>
    </ol>
</section>
<span class="base_url hidden"><?= base_url("") ?></span>
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Onaysız Sorular</div>
                <div class="panel-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Kategori</th>
                            <th>Soru</th>
                            <th>Puan</th>
                            <th>Onay</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($rows as $row){ ?>
                            <tr>
                                <td><?= $row->soru_id ?></td>
                                <td><?= $row->kategori_adi ?></td>
                                <td><?= $row->soru_text ?></td>
                                <td><?= $row->soru_puan ?></td>
                                <td>
                                    <input class="toggle_check"
                                           data-onstyle="success"
                                           data-size="mini"
                                           data-offstyle="danger"
                                           type="checkbox"
                                           data-toggle="toggle"
                                           dataID="<?= $row->soru_id ?>"
                                        <?= $row->soru_onay == 1 ? "checked" : "" ?>
                                    >
                                </td>
                                <td><a href="#"><i class="fa fa-edit"></i></a> | <a href="#"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                        <?php } ?>
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view("yonetim/include/footer"); ?>
<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
    $('#example1').DataTable();

    //Onaylı Değişimi

    $(".toggle_check").change(function () {
        var onayli = $(this).prop("checked");
        var base_url = $(".base_url").text();
        var id = $(this).attr("dataId");

        $.post(base_url + "admin/isActiveSetter",{"soru_id" :id,"soru_onay":onayli},function (response) {})
    })
</script>
