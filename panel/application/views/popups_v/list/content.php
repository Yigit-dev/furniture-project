<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Popup Listesi
            <?php if (isAllowedWriteModule()){ ?>
                  <a href="<?php echo base_url("popups/new_form"); ?>" class="btn btn-outline btn-primary btn-xs pull-right"> <i class="fa fa-plus"></i> Yeni Ekle</a>
            <?php } ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)) { ?>

                <div class="alert alert-info text-center">
                    <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("popups/new_form"); ?>">tıklayınız</a></p>
                </div>

            <?php } else { ?>
                <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered content-container">
                    <thead>
                        <th class="w50">#id</th>
                        <th>Başlık</th>
                        <th>Hedef Sayfa</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody>

                        <?php foreach($items as $item) { ?>

                            <tr>
                                <td class="w50 text-center">#<?php echo $item->id; ?></td>
                                <td><?php echo $item->title; ?></td>
                                <td><?php echo get_page_list($item->page); ?></td>
                                <td class="text-center w100">
                                    <input
                                        data-url="<?php echo base_url("popups/isActiveSetter/$item->id"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                        <?php echo ($item->isActive) ? "checked" : ""; ?>
                                    />
                                </td>
                                <td class="text-center w200">
                                    <?php if (isAllowedDeleteModule()){ ?>
                                        <button
                                            data-url="<?php echo base_url("popups/delete/$item->id"); ?>"
                                            class="btn btn-sm btn-danger btn-outline remove-btn">
                                            <i class="fa fa-trash"></i> Sil
                                        </button>
                                    <?php } ?>
                                    <?php if (isAllowedUpdateModule()){ ?>
                                    <a href="<?php echo base_url("popups/update_form/$item->id"); ?>" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o"></i> Düzenle</a>
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