<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <?php echo "<b>$item->title</b> kaydını düzenliyorsunuz"; ?>
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("services/update/$item->id"); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label><h4>İkon</h4></label>
                        <p style="color: #0EAA54;">Bu adreste sevdiğiniz ikonun adını kopyalayabilirsiniz. <a href="https://ionicons.com/" target="_blank">Lütfen buraya tıklayın</a> </p>

                        <input class="form-control" placeholder="Seçtiğiniz ikonun adını kopyalayıp buraya yapıştırın..." name="title" value="<?php echo $item->title; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label><h4>Açıklama</h4></label>
                        <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}"><?php echo $item->description; ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-md btn-outline">Güncelle</button>
                    <a href="<?php echo base_url("services"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>