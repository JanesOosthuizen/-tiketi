<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <form action="" id="settingsForm" method="post">
                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
<!--                      <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Settings 1</a>
                      </li>-->
<!--                      <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Settings 2</a>
                      </li>
                      <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Settings 3</a>
                      </li>-->
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <label>Terms and Conditions</label>
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                            <textarea name="termsandconditions"><?php echo $set['termsandconditions']; ?></textarea>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            Delayed Time
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          
                        </div>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    tinymce.init({ 
        selector:'textarea',
        menubar: false,
        toolbar: false
    });
    
    $('#settingsForm').on("submit",function(e){
        e.preventDefault();
        $.ajax({
            url: '<?php echo base_url(); ?>index.php/settings/save_settings',
            type : "POST",
            data: { 
                formData : $('#settingsForm').serialize()
            },
            dataType: 'html',
            beforeSend: function() {

            },
            complete: function() {

            },			
            success: function(data) {
                console.log(data);
                //location.reload();
            },
            error: function(xhr, ajaxOptions, thrownError) {

            }
	});  
    });
});  
</script>