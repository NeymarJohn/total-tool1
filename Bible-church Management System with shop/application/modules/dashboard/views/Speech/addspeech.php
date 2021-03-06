<div class="content">
    <div class="container">
        <div class="xxxrow">
            <div class="xxxcol-md-offset-1 xxxcol-md-10">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title"><i class="material-icons">forum</i> <?php echo $this->lang->line('dash_addspeech_panel_title'); ?></h4>
                        <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                    </div>
                    <div class="card-content">

                        <form id="addSpeechForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/speech/addnewspeech" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-6">

                                    <div class="imageWrapper" style="background-image: url(<?php echo base_url(); ?>assets/assets/images/upload.png);">
                                        <img id="image" src="">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <p class="image_select_text"><i class="material-icons">add_a_photo</i> <?php echo $this->lang->line('dash_gpanel_spp'); ?></p>
                                        <input type="file" onchange="previewFile()" name="profileimage" id="profileimage">
                                        <input type="hidden" name="x" id="x">
                                        <input type="hidden" name="y" id="y">
                                        <input type="hidden" name="width" id="width">
                                        <input type="hidden" name="height" id="height">
                                    </div>
                                </div>

                                <div class="col-md-6 destroy_cropper_div">
                                	<div class="form-group label-floating">
                                		<p class="image_select_text destroy_cropper"><i class="material-icons">crop</i> <?php echo $this->lang->line('dash_gpanel_clear_crop'); ?></p>
                                	</div>
                                </div>

                                <div class="col-md-6 ini_cropper_div" style="display:none">
                                	<div class="form-group label-floating">
                                		<p class="image_select_text ini_cropper"><i class="material-icons">crop</i> <?php echo $this->lang->line('dash_gpanel_ini_crop'); ?></p>
                                	</div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"><?php echo $this->lang->line('dash_gpanel_fname'); ?> (*)</label>
                                        <input type="text" id="fname" name="fname" class="form-control" required>
                                        <span class="material-input"></span></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"><?php echo $this->lang->line('dash_gpanel_lname'); ?></label>
                                        <input type="text" id="lname" name="lname" class="form-control">
                                        <span class="material-input"></span></div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"><?php echo $this->lang->line('dash_gpanel_position'); ?> (*)</label>
                                        <input type="text" id="position" name="position" class="form-control" required>
                                        <span class="material-input"></span></div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"><?php echo $this->lang->line('dash_gpanel_speech'); ?></label>
                                        <textarea type="text" id="speech" name="speech" class="form-control"></textarea>
                                        <span class="material-input"></span></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"><?php echo $this->lang->line('dash_gpanel_facebook'); ?></label>
                                        <input type="text" id="fname" name="facebook" class="form-control" >
                                        <span class="material-input"></span></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"><?php echo $this->lang->line('dash_gpanel_twitter'); ?></label>
                                        <input type="text" id="fname" name="twitter" class="form-control">
                                        <span class="material-input"></span></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"><?php echo $this->lang->line('dash_gpanel_googleplus'); ?></label>
                                        <input type="text" id="lname" name="googleplus" class="form-control">
                                        <span class="material-input"></span></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"><?php echo $this->lang->line('dash_gpanel_linkedin'); ?></label>
                                        <input type="text" id="position" name="linkedin" class="form-control">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"><?php echo $this->lang->line('dash_gpanel_youtube'); ?></label>
                                        <input type="text" id="fname" name="youtube" class="form-control" >
                                        <span class="material-input"></span></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"><?php echo $this->lang->line('dash_gpanel_pinterest'); ?></label>
                                        <input type="text" id="fname" name="pinterest" class="form-control">
                                        <span class="material-input"></span></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"><?php echo $this->lang->line('dash_gpanel_instagram'); ?></label>
                                        <input type="text" id="lname" name="instagram" class="form-control">
                                        <span class="material-input"></span></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"><?php echo $this->lang->line('dash_gpanel_whatsapp'); ?></label>
                                        <input type="text" id="position" name="whatsapp" class="form-control">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>

                            <button id="addSpeechSubmit" type="submit" class="btn btn-primary pull-right"><i class="material-icons">person_add</i> <?php echo $this->lang->line('dash_addspeech_panel_title'); ?></button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
