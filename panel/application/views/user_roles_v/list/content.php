<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Kullanıcı Rolleri Listesi
            <?php if (isAllowedWriteModule()){ ?>
                <a href="<?php echo base_url("user_roles/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
            <?php } ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)) { ?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("user_roles/new_form"); ?>">tıklayınız</a></p>
                </div>

            <?php } else { ?>
            <div class="table-responsive">

                <table class="table table-hover table-striped table-bordered content-container">
                    <thead>
                        <th class="order"><i class="fa fa-arrow-down"></i></th>
                        <th class="w50">#id</th>
                        <th>Başlık</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody>

                        <?php foreach($items as $item) { ?>

                            <tr id="ord-<?php echo $item->id; ?>">
                                <td class="order"><i class="fa fa-reorder"></i></td>
                                <td class="w50 text-center">#<?php echo $item->id; ?></td>
                                <td><?php echo $item->title; ?></td>
                                <td class="text-center w100">
                                    <input
                                        data-url="<?php echo base_url("user_roles/isActiveSetter/$item->id"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                        <?php echo ($item->isActive) ? "checked" : ""; ?>
                                    />
                                </td>
                                <td class="text-center w300">
                                    <?php if (isAllowedDeleteModule()){ ?>
                                        <button
                                            data-url="<?php echo base_url("user_roles/delete/$item->id"); ?>"
                                            class="btn btn-sm btn-danger btn-outline remove-btn">
                                            <i class="fa fa-trash"></i> Sil
                                        </button>
                                    <?php } ?>
                                    <?php if (isAllowedUpdateModule()){ ?>
                                        <a href="<?php echo base_url("user_roles/update_form/$item->id"); ?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
                                        <a href="<?php echo base_url("user_roles/permissions_form/$item->id"); ?>" class="btn btn-sm btn-dark btn-outline"><i class="fa fa-eye"></i> Yetki Tanımı</a>
                                    <?php } ?>
                                </td>
                            </tr>

                        <?php } ?>

                    </tbody>

                </table>
            </div>
            <?php } ?>

        </div><!-- .widget -->
    </div><!-- END column -->
</div>