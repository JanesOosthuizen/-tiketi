<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="<?php echo base_url(); ?>index.php/Jobcard/addJobcardItemProccess">
            <input type="hidden" name="jobcard" value="<?php echo $jobcard; ?>"/>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Jobcard Details</h4>
            </div>
            <div class="modal-body">
                <div class="row tile_count">
                    <div class="col-md-6 col-sm-6 col-xs-12X">
                        <div class="x_panel">
                            <div class="x_content">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Salesperson</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" disabled="disabled" value="<?php echo $user['username']; ?>">
                                            <input type="hidden" name="salesperson" value="<?php echo $user['user_id']; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Technician</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" name="technician">
                                              <option value="">Choose option</option>
                                              <?php
                                              foreach($technicians as $tech){
                                                  echo '<option value="'.$tech->user_id.'">'.$tech->name.' '.$tech->surname.'</option>';
                                              }
                                              ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Device</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" name="device">
                                                <option value="">Choose Device</option>
                                                <?php
                                                foreach($devices as $device){
                                                ?>
                                                    <option value="<?php echo $device->deviceMake; ?> <?php echo $device->deviceModel; ?>"><?php echo $device->deviceMake; ?> <?php echo $device->deviceModel; ?></option>

                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="x_panel">
                              <div class="x_content">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Serial No.</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" name="serial" placeholder="xxxx-xxxx-xxxx-xxxx">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Warranty / Chargable</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" name="type">
                                              <option value="">Choose option</option>
                                              <option value="warranty">Warranty</option>
                                              <option value="chargable">Chargable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <select class="form-control" name="deviceStatus">
                                              <option value="---">Choose option</option>
                                              <option value="To be Repaired">To be Repaired</option>
                                              <option value="At Workshop">At Workshop</option>
                                              <option value="Uneconomic to Repair">Uneconomic to Repair</option>
                                              <option value="Repair Completed">Repair Completed</option>
                                            </select>
                                        </div>
                                    </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Fault Description</label>
                            <div class="col-md- col-sm-9 col-xs-12">
                                <textarea class="form-control" name="description" placeholder="Full Fault Description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>