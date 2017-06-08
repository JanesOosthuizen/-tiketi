<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
    <?php //echo $unlockpattern; ?>
    <div id="patternContainer"></div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="control-label" for="securitycode">Security Code / Lock Code</label>
                <?php echo $securityCode; ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <label class="control-label" for="appleid">Apple ID</label>
                <?php echo $appleId; ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <label class="control-label" for="password">Password</label>
               <?php echo $password; ?>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <h2>Accessories Details</h2>
        <ul>
        <?php 
        foreach(json_decode($accessories) as $key => $acc){
            echo '<li>'.$key.'</li>';
        }; 
        ?>
        </ul>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
            <label class="col-md-12 col-sm-12 col-xs-12" for="customer">This is confirmation that the following items were booked in along with the device:
            </label>

        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <label id="termstoggle">By Signing you agree to the Terms and Agreements</label>
        <div id="signature"><img style="width:200px;" src="<?php echo $signature; ?>" /></div>
        <center style="font-size:14px;">Signature</center>
    </div>
</div>