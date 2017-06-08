<!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Dashboard</h3>
                </div>
                <div class="title_right">
                    
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12 col-xs-12 form-group pull-right">
                <div class="row tile_count">
                    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                      <span class="count_top"><i class="fa fa-cog"></i> Total Jobcards Open</span>
                      <div class="count green"><?php echo $data['totalOpenJobs']->count; ?></div>
                      <!--<span class="count_bottom"><i class="green">4% </i> From last Week</span>-->
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                      <span class="count_top"><i class="fa fa-mobile"></i> Total Devices In For Repair</span>
                      <div class="count green"><?php echo $data['totalOpenDevices']->openDevices; ?></div>
                      <!--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>-->
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                      <span class="count_top"><i class="fa fa-cogs"></i> Total Jobcards Created</span>
                      <div class="count"><?php echo $data['totalJobs']->count; ?></div>
                      <!--<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
                      <span class="count_top"><i class="fa fa-mobile"></i> Total Devices Loaded</span>
                      <div class="count"><?php echo $data['totalDevices']->countDevices; ?></div>
                      <!--<span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>-->
                    </div>
<!--                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                      <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>
                      <div class="count">2,315</div>
                      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                      <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>
                      <div class="count">7,325</div>
                      <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
                    </div>-->
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        Print Layouts<br/>
                        Emails Sent when tasks are updated<br/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="x_panel tile fixed_height_320">
                        <div class="x_title">
                          <h2>Latest Created Jobs</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table table-striped ">
                                <tr>
                                    <th>Jobcard Nr</th>
                                    <th>Jobcard Status</th>
                                    <th>Date Created</th>
                                    <th></th>
                                </tr>
                                <?php
                                foreach($data['Jobcards'] as $jc){
                                    echo '<tr>
                                            <td>
                                                '.$jc->idJobcards.'
                                            </td>
                                            <td>
                                                '.$jc->jobcardStatus.'
                                            </td>
                                            <td>
                                                '.$jc->dateCreated.'
                                            </td>
                                            <td>
                                                <a href="'.base_url().'index.php/Jobcard/viewjobcard/'.$jc->idJobcards.'">View Job</a>
                                            </td>
                                          </tr>';
                                }
                                ?>
                                </table>
                            <div class="clearfix"></div>
                        </div>
                        </div>
                      </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="x_panel tile fixed_height_320">
                        <div class="x_title">
                          <h2>Long Delayed Jobs</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table table-striped ">
                                <tr>
                                    <th>Jobcard Nr</th>
                                    <th>Jobcard Status</th>
                                    <th>Date Created</th>
                                    <th></th>
                                </tr>
                                <?php
                                foreach($data['DelayedJobcards'] as $jc){
                                    echo '<tr>
                                            <td>
                                                '.$jc->idJobcards.'
                                            </td>
                                            <td>
                                                '.$jc->jobcardStatus.'
                                            </td>
                                            <td>
                                                '.$jc->dateCreated.'
                                            </td>
                                            <td>
                                                <a href="'.base_url().'index.php/Jobcard/viewjobcard/'.$jc->idJobcards.'">View Job</a>
                                            </td>
                                          </tr>';
                                }
                                ?>
                                </table>
                            <div class="clearfix"></div>
                        </div>
                        </div>
                      </div>
<!--                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="x_panel tile fixed_height_320">
                        <div class="x_title">
                          <h2>Consultant Performance</h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                          
                            <div class="clearfix"></div>
                        </div>
                        </div>
                      </div>-->
                </div>
            </div>
        </div>
    </div>
<!-- /page content -->