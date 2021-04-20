<div class="content gusers">
    <div class="container">
        <div class="xxxrow">	                    
            <div class="xxxcol-md-offset-1 xxxcol-md-10">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title"><i class="material-icons">speaker_notes</i> <?php echo $this->lang->line('dash_addblog_panel_title'); ?></h4>
                        <p class="category">(*) <?php echo $this->lang->line('dash_gpanel_mfar'); ?></p>
                    </div>
                    <div class="card-content">
                        <form id="addUserBlogForm" class="form-horizontal" action="<?php echo base_url(); ?>dashboard/userpanel/blog/addnewblog" method="post" enctype="multipart/form-data">
                            <div class="row">                                
                                <div class="col-md-12">
                                    <div class="form-group label-floating">													
                                        <p class="image_select_text"><i class="material-icons">add_a_photo</i> <?php echo $this->lang->line('dash_gpanel_bpp'); ?></p>
                                        <input type="file" onchange="blogFeaturePhoto()" name="blogimage" id="blogimage">
                                        <input type="hidden" name="x" id="x">
                                        <input type="hidden" name="y" id="y">
                                        <input type="hidden" name="width" id="width">
                                        <input type="hidden" name="height" id="height">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"><?php echo $this->lang->line('dash_gpanel_title'); ?> (*)</label>
                                        <input type="text" name="blogtitle" class="form-control" required>
                                        <span class="material-input"></span></div>
                                </div> 
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label"><?php echo $this->lang->line('dash_gpanel_description'); ?></label>
                                        <textarea rows="5" type="text" id="blogdescription" name="blogdescription" class="form-control"></textarea>
                                        <span class="material-input"></span></div>
                                </div>
                            </div>

                            <button id="addUserBlogSubmit" type="submit" class="btn btn-primary pull-right"><i class="material-icons">speaker_notes</i> <?php echo $this->lang->line('dash_addblog_panel_title'); ?></button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>