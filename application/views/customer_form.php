<div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row tile_count">
        <form action="" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
            <input type="hidden" name="jobcard" value="<?php echo $jobcard; ?>"/>
            <input type="hidden" name="jobcardDevice" value="<?php echo $jobcardDevice; ?>"/>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>Device Details</h2>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div id="patternContainer"></div>
                <input type="hidden" name="unlockPattern" id="unlockPattern" value=""/>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label" for="securitycode">Security Code / Lock Code <span class="required">*</span></label>
                        <input type="text" id="customer" name="securitycode" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label" for="appleid">Apple ID <span class="required">*</span></label>
                        <input type="text" id="customer" name="appleid" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <label class="control-label" for="password">Password <span class="required">*</span></label>
                      <input type="text" id="customer" name="password" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h2>Accessories Details</h2>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <label class="col-md-12 col-sm-12 col-xs-12" for="customer">This is confirmation that the following items were booked in along with the device:
                    </label>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <input type="checkbox" name="accessories[battery]"/> <label for="battery">Battery</label>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <input type="checkbox" name="accessories[backcover]"/> <label for=backcover">Back Cover</label>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <input type="checkbox" name="accessories[chargers]"/> <label for="chargers">Chargers</label>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <input type="checkbox" name="accessories[memcard]"/> <label for="memcard">Mem Card</label>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <input type="checkbox" name="accessories[cover]"/> <label for="cover">Cover</label>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <input type="checkbox" name="accessories[stylus]"/> <label for="stylus">Stylus</label>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3">
                        <input type="checkbox" name="accessories[simcard]"/> <label for="simcard">SIM Card</label>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <label id="termstoggle">By Signing you agree to the Terms and Agreements ( Click To Read )</label>
                <div class="termsandagreementsholder">
                    <?php echo $terms; ?>
                </div>
                <div id="signature"></div>
                <center style="font-size:14px;">Signature</center>
                <input type="hidden" name="signatureField" id="signatureField"/>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <button type="submit" class="btn btn-success submitcustomerForm">Complete</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--<div class="customerPrompt">
    <span>
        <h2>Customer Form</h2>
        Please hand the device to the customer.<br/><br/>
        <button class="customerClose">NEXT</button>
    </span>
</div>
<div class="consultantPrompt" style="display:none">
    <span>
        <h2>Review Details</h2>
        <b>Please hand the device to the consultant.</b><br/><br/>
        <button class="consultantClose">NEXT</button>
    </span>
</div>-->
<script type="text/javascript">    
$(document).ready(function(){
    
//    $('.customerClose').on('click',function(){
//       $('.customerPrompt').hide(); 
//    });
//    
//    $('.consultantClose').on('click',function(){
//       $('.consultantPrompt').hide(); 
//       $('.submitcustomerForm').show();
//       $('.completecustomerForm').hide();
//    });
//    
//    var docheight = $(window).height();
//    $('.customerPrompt').height(docheight);
//    $('.consultantPrompt').height(docheight);
//    
//    $('.completecustomerForm').on('click',function(){
//        $('.consultantPrompt').show();
//    });
    
    var lock = new PatternLock("#patternContainer",{
        onDraw:function(pattern){
            $('#unlockPattern').val(pattern);
        }
    });
    
    $('#termstoggle').on('click',function(){
       $('.termsandagreementsholder').toggle(); 
    });

        
    
    var $sigdiv = $("#signature")
    $sigdiv.jSignature(); // inits the jSignature widget.
    // after some doodling...
    
    $("#signature").bind('change', function(e){ 
        // Getting signature as SVG and rendering the SVG within the browser. 
        // (!!! inline SVG rendering from IMG element does not work in all browsers !!!)
        // this export plugin returns an array of [mimetype, base64-encoded string of SVG of the signature strokes]
        var datapair = $sigdiv.jSignature("getData", "svgbase64") ;
        var i = new Image();
        //console.log("data:" + datapair[0] + "," + datapair[1] );
        $('#signatureField').val("data:" + datapair[0] + "," + datapair[1]);
        //$("#sign").empty();
        //i.src = "data:" + datapair[0] + "," + datapair[1] ;
        //$(i).appendTo($("#sign")); // append the image (SVG) to DOM.
    });

});
</script>