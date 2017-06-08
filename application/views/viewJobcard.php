<!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>View Jobcard</h3>
                </div>
                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">

                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <form id="demo-form2" action="<?php echo base_url();?>index.php/Jobcard/updateJobcardProccess" method="POST" data-parsley-validate class="form-horizontal form-label-left">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                          <h2>Client Information</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer">Customer <span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="customer" name="customer" required="required" value="<?php echo $jobcard[0]->customer; ?>" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contact-name">Contact Name <span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="contact-name" name="contact-name" required="required" value="<?php echo $jobcard[0]->contactName; ?>" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="telephone-number" class="control-label col-md-3 col-sm-3 col-xs-12">Telephone Number</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="telephone-number" class="form-control col-md-7 col-xs-12" value="<?php echo $jobcard[0]->telephone; ?>" type="text" name="telephone-number">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="cellphone-number" class="control-label col-md-3 col-sm-3 col-xs-12">Cellphone Number</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="cellphone-number" class="form-control col-md-7 col-xs-12" value="<?php echo $jobcard[0]->cellphone; ?>" type="text" name="cellphone-number">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email Address</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="email" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $jobcard[0]->email; ?>" name="email">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="IDnumber" class="control-label col-md-3 col-sm-3 col-xs-12">ID Number</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="IDnumber" class="form-control col-md-7 col-xs-12" type="text" value="<?php echo $jobcard[0]->Idnr; ?>" name="IDnumber">
                                  </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                          <h2>Jobcard Details</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <input type="hidden" name="jobCard" value="<?php echo $idJobcards; ?>"/>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jobcardStatus">Jobcard Status 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select name="jobcardStatus" id="jobcardStatus" class="form-control col-md-7 col-xs-12">
                                        <?php 
                                        if($jobcard[0]->jobcardStatus == 'open'){
                                            echo '<option selected="selected" value="open">Open</option>';
                                        } else {
                                            echo '<option value="open">Open</option>';
                                        }
                                        if($jobcard[0]->jobcardStatus == 'completed'){
                                            echo '<option selected="selected" value="completed">Completed</option>';
                                        } else {
                                            echo '<option value="completed">Completed</option>';
                                        }
                                        ?>

                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="remark">Remark
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="remark" name="remark" required="required" value="<?php echo $jobcard[0]->remark; ?>" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                          <h2>Devices</h2>
                          <button type="button" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">Add Device</button>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                  <tr class="headings">
                                    <th class="column-title">Device </th>
                                    <th class="column-title">Serial Nr </th>
                                    <th class="column-title">Type</th>
                                    <th class="column-title">Device Status</th>
                                    <th class="column-title">Technician</th>
                                    <th class="column-title">Access Details</th>
                                    <th class="column-title no-link last"><span class="nobr">Action</span>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($jobcard_devices as $jd){ ?>
                                        <tr>
                                            <td><?php echo $jd->device; ?></td>
                                            <td><?php echo $jd->serialnr; ?></td>
                                            <td><?php echo $jd->warranty; ?></td>
                                            <td><?php echo $jd->deviceStatus; ?></td>
                                            <td><?php echo $jd->technician; ?></td>
                                            <td>
                                                <?php 
                                                if($jd->idaccessDetails == ''){
                                                    echo '<a href="'. base_url().'index.php/Jobcard/customerForm/'. $jd->idjobcard_item.'" class="btn btn-primary btn-xs " ><i class="fa fa-newspaper-o"></i> Add Access Details </a>';
                                                } else {
                                                    echo '<span class="btn btn-primary btn-xs viewAccessDetails" id="'.$jd->idjobcard_item.'"><i class="fa fa-newspaper-o"></i> View Access Details </span>';
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <button type="button" id="<?php echo $jd->idjobcard_item; ?>" class="btn btn-primary btn-xs pull-right editDevice" data-toggle="modal" data-target=".edit_device"><i class="fa fa-pencil"></i> Edit Device</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-success">Update Jobcard</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    <?php echo $modal; ?>
    <?php echo $Editmodal; ?>
    <?php echo $accessModal; ?>

<!-- /page content -->
<script type="text/javascript">
$(document).ready(function(){
    $('.editDevice').on('click',function(){
        var jobcardId = $(this).attr('id');
        $.ajax({
             url: '<?php echo base_url(); ?>index.php/jobcard/edit_device',
             type : "POST",
             data: {
                 deviceId: jobcardId
             },   
             dataType: 'json',
             beforeSend: function() {

             },
             complete: function() {

             },			
             success: function(data) {
                 $('#jobcard').val(data.jobcard);
                 $('#device').val(data.idjobcard_item);
                 $('#salesperson').val(data.salesperson);
                 $('#technicianField').val(data.technician);
                 $('#deviceType').val(data.device);
                 $('#serial').val(data.serialnr);
                 $('#warranty').val(data.warranty);
                 $('#deviceStatus').val(data.deviceStatus);
                 $('#description').val(data.faultDescription);
             },
             error: function(xhr, ajaxOptions, thrownError) {

             }
        });
   });
   
   $('.viewAccessDetails').on('click',function(){
        var jobcardId = $(this).attr('id');
        $.ajax({
            url: '<?php echo base_url(); ?>index.php/jobcard/get_access_details',
            type : "POST",
            data: {
                deviceId: jobcardId
            },   
            dataType: 'json',
            beforeSend: function() {

            },
            complete: function() {

            },			
            success: function(data) {
                $('.access_details_modal').modal();
                $('.access_details_modal .modal-body').empty();
                $('.access_details_modal .modal-body').html(data.html);
                var lock= new PatternLock('#patternContainer',{enableSetPattern : true});
                lock.setPattern(data.unlockpattern);
                lock.disable();
                console.log(data.unlockpattern);
            },
            error: function(xhr, ajaxOptions, thrownError) {

            }
        });
   });
});
</script>