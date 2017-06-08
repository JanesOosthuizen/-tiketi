<!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
              <div class="title_left">
                    <h3>Add Jobcard</h3>
                    
              </div>
                <div class="pull-right" style="margin-top:20px; display:none;">
                        <div class="progressindicator">
                            <i class="fa fa-cog fa-spin fa-fw"></i> Saving
                            <span class="sr-only">Loading...</span>
                        </div>        
                    </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <form id="newJobcard" data-parsley-validate class="form-horizontal form-label-left">
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
                                    <input type="text" id="customer" name="customer" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="contact-name">Contact Name <span class="required">*</span>
                                  </label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="contact-name" name="contact-name" required="required" class="form-control col-md-7 col-xs-12">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="telephone-number" class="control-label col-md-3 col-sm-3 col-xs-12">Telephone Number</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="telephone-number" class="form-control col-md-7 col-xs-12" type="text" name="telephone-number">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="cellphone-number" class="control-label col-md-3 col-sm-3 col-xs-12">Cellphone Number</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="cellphone-number" class="form-control col-md-7 col-xs-12" type="text" name="cellphone-number">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">Email Address</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="email" class="form-control col-md-7 col-xs-12" type="text" name="email">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="IDnumber" class="control-label col-md-3 col-sm-3 col-xs-12">ID Number</label>
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="IDnumber" class="form-control col-md-7 col-xs-12" type="text" name="IDnumber">
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
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="jobcardStatus">Jobcard Status 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="jobcardStatus" name="jobcardStatus"  class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="remark">Remark
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="remark" name="remark" required="required" class="form-control col-md-7 col-xs-12">
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
                            
                            <div class="ln_solid"></div>
                            <div class="form-group">
                              <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-success">Submit</button>
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
