<!-- footer content -->
        <footer>
          <div class="pull-right">
            Software Developed by Digibit Solutions (Pty) Ltd
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url(); ?>js/patternlock/patternLock.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/js/notify.min.js"></script>
    <!--[if lt IE 9]>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jsign/flashcanvas.js"></script>
    <![endif]-->
	<script src="<?php echo base_url(); ?>js/jsign/jSignature.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>js/custom.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            
            <?php 
            if(!empty($notifs)){
                foreach($notifs as $key => $notif){
                    ?>
                      $.notify('<?php echo $notif; ?>','success');
                    <?php
                }
            }
            ?>
        });
	</script>
  </body>
</html>