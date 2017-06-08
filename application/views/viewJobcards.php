<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-12 col-sm-12 col-xs-12X">
            <div class="page-title">
              <div class="title_left">
                <h3>Jobcards</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="jobcardFilter">Filter: <span id="all" class="selected">All</span><span id="open">Open</span><span id="completed">Completed</span></div>
            <table class="table table-striped jambo_table bulk_action jobcardTable">
                <thead>
                  <tr class="headings">
                    <th class="column-title">Jobcard Nr </th>
                    <th class="column-title">Customer </th>
                    <th class="column-title">Status </th>
                    <th class="column-title">Date Created </th>
                    <th class="column-title no-link last"><span class="nobr">Action</span>
                    </th>
                    <th class="bulk-actions" colspan="7">
                      <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($jobcards as $jobcard){
                    ?>
                    <tr class="even pointer <?php echo $jobcard->jobcardStatus; ?>">
                        <td class=""><?php echo $jobcard->idJobcards; ?></td>
                        <td class=""><?php echo $jobcard->contactName.' '.$jobcard->contactSurname; ?> </td>
                        <td class=""><?php echo $jobcard->jobcardStatus; ?></td>
                        <td class=""><?php echo $jobcard->dateCreated; ?></td>
                        <td class="last"><a href="<?php echo base_url(); ?>index.php/Jobcard/viewjobcard/<?php echo $jobcard->idJobcards; ?>" class="btn btn-xs btn-primary">View</a></td>
                    </tr>
                    <?php
                        }
                    ?>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('.jobcardFilter span').on('click',function(){
        $('.jobcardFilter span').removeClass('selected')
        var status = $(this).attr('id');
        $(this).addClass('selected');
        if(status == 'all'){
           $('.jobcardTable tbody tr').fadeIn('fast');
        } else {
            $('.jobcardTable tbody tr').fadeOut('fast');
            $('.'+status).fadeIn('fast');
        }
    });
});  
</script>