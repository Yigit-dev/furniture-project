<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Tamamlanan Projelerimiz Sayfasına Ekleme Yap
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("tables/save"); ?>" method="post">
                    <div class="form-group">
                        <label>İl / İlçe</label>
                        <input class="form-control" placeholder="İl / İlçe giriniz" name="title">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label>Açıklama</label>
                        <textarea name="description" class="m-0" data-plugin="summernote" data-options="{height: 250}"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Kaydet</button>
                    <a href="<?php echo base_url("tables"); ?>" class="btn btn-md btn-danger btn-outline">İptal</a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>