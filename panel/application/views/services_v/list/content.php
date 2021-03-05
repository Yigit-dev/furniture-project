<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Hizmet Listesi
            <?php if (isAllowedWriteModule()){ ?>
                <a href="<?php echo base_url("services/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
            <?php } ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)) { ?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("services/new_form"); ?>">tıklayınız</a></p>
                </div>

            <?php } else { ?>
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered content-container">
                    <thead>
                        <th class="order"><i class="fa fa-arrow-down"></i></th>
                        <th>İkon Adı</th>
                        <th>Açıklama</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody class="sortable" data-url="<?php echo base_url("services/rankSetter"); ?>">
                        <?php foreach($items as $item) { ?>
                            <tr id="ord-<?php echo $item->id; ?>">
                                <td class="order"><i class="fa fa-reorder"></i></td>
                                <td class="w100" style="text-align: center"><?php echo $item->title; ?></td>
                                <td class="w300"><?php echo $item->description; ?></td>
                                <td class="text-center w50">
                                    <input
                                        data-url="<?php echo base_url("services/isActiveSetter/$item->id"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                        <?php echo ($item->isActive) ? "checked" : ""; ?>
                                    />
                                </td>
                                <td class="text-center w100">
                                    <?php if (isAllowedDeleteModule()){ ?>
                                        <button
                                            data-url="<?php echo base_url("services/delete/$item->id"); ?>"
                                            class="btn btn-sm btn-danger btn-outline remove-btn">
                                            <i class="fa fa-trash"></i> Sil
                                        </button>
                                    <?php } ?>
                                    <?php if (isAllowedUpdateModule()){ ?>
                                        <a href="<?php echo base_url("services/update_form/$item->id"); ?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
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