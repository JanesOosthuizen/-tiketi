<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-6 col-sm-6 col-xs-12X">
            <div class="x_panel">
                    <div class="x_title">
                      <h2>Device List</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Make</th>
                                    <th>Model</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(empty($devices)){
                                    ?>
                                        <tr>
                                            <th scope="row" colspan="4">No Devices Loaded Yet</th>
                                        </tr>
                                    <?php
                                } else {
                                    foreach($devices as $device){
                                    ?>
                                        <tr>
                                            <th scope="row"><?php echo $device->iddevices; ?></th>
                                            <td><?php echo $device->deviceMake; ?></td>
                                            <td><?php echo $device->deviceModel; ?></td>
                                        </tr>
                                    <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                  <div class="x_title">
                    <h2>Add New Device</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form class="form-horizontal form-label-left" id="addDeviceForm" action="<?php echo base_url(); ?>index.php/settings/add_device" method="post">
                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Device Make</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" required="required" name="make" placeholder="ex. Apple, Samsung"/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Device Model</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" class="form-control" required="required" name="model" placeholder="ex. Galaxy S6, iPhone 5s">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Add Device</button>
                        </div>
                      </div>

                    </form>
                  </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    
});    
</script>