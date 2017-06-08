<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-6 col-sm-6 col-xs-12X">
            <div class="x_panel">
                    <div class="x_title">
                        <h2>Technicians</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($technicians as $person){
                                ?>
                                <tr id="user-<?php echo $person->user_id; ?>">
                                    <th scope="row">1</th>
                                    <td><?php echo $person->name.' '.$person->surname; ?></td>
                                    <td><?php echo $person->email_address; ?></td>
                                    <td><?php echo $person->company; ?></td>
                                    <td><i id="<?php echo $person->user_id; ?>" class="fa fa-trash deletePerson" aria-hidden="true"></i></td>
                                </tr>
                                <?php
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
                    <h2>Add New Technician</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <form class="form-horizontal form-label-left" action="<?php echo base_url(); ?>index.php/settings/addTechnician" method="post">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" name="name" placeholder="Name" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Surname</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" class="form-control" name="surname" placeholder="Surname" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email Address</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" class="form-control" name="email" placeholder="Email Adress" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Company</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" class="form-control" name="company" placeholder="Company" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="password" class="form-control" name="password" placeholder="Password" required/>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                              <button type="submit" class="btn btn-success">Add Technician</button>
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
    $('.deletePerson').on('click',function(){
        console.log('delete');
        var userid = $(this).attr('id');
        $.ajax({
            url: '<?php echo base_url(); ?>index.php/settings/deleteSalesConsultant',
            type : "POST",
            data: {
                userId: userid
            },   
            dataType: 'html',
            beforeSend: function() {

            },
            complete: function() {

            },			
            success: function(data) {
                var userRow = '#user-'+data;
                $(userRow).remove();
            },
            error: function(xhr, ajaxOptions, thrownError) {

            }
        });
   });
});  
</script>