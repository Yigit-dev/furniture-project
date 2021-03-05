<div role="tabpanel" class="tab-pane in active fade" id="tab-1">

    <div class="row">

        <div class="form-group col-md-8">
            <label>Şirket Adı</label>
            <input class="form-control" placeholder="Şirketinizin ya da Sitenizin adı"
                   name="company_name"
                   value="<?php echo isset($form_error) ? set_value("company_name") : $item->company_name; ?>">
            <?php if (isset($form_error)) { ?>
                <small
                    class="pull-right input-form-error"> <?php echo form_error("company_name"); ?></small>
            <?php } ?>
        </div>


    </div>

    <div class="row">

        <div class="form-group col-md-4">
            <label>Telefon 1</label>
            <input class="form-control" placeholder="Telefon numaranız"
                   name="phone_1"
                   value="<?php echo isset($form_error) ? set_value("phone_1") : $item->phone_1; ?>">
            <?php if (isset($form_error)) { ?>
                <small
                    class="pull-right input-form-error"> <?php echo form_error("phone_1"); ?></small>
            <?php } ?>
        </div>

        <div class="form-group col-md-4">
            <label>Telefon 2</label>
            <input class="form-control" placeholder="Diğer telefon numaranız (opsiyonel)" name="phone_2"
                   value="<?php echo isset($form_error) ? set_value("phone_2") : $item->phone_2; ?>">
        </div>

    </div>
    <!-- <div class="row">

        <div class="form-group col-md-8">
            <label>Google Haritalar</label>
            <label>Google'dan aldığınız iframe kodunun 'src' kısmını buraya yapıştırınız</label>
            <textarea name="map" class="m-0" data-plugin="summernote" data-options="{height: 250}"><?php echo strip_tags($item->map); ?></textarea>
        </div>


    </div> -->

</div><!-- .tab-pane  -->