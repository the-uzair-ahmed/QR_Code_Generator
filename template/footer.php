<div class="pt-3">
  <div class="container">
    <hr>
  	<div class="showdemo text-center mt-4">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                  <i class="fa fa-eyedropper fa-stack-1x"></i>
                </span><br>
                <p class="lead text-center">Select colors</p>
            </div>

            <div class="col-sm-6 col-md-3">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                  <i class="fa fa-upload fa-stack-1x"></i>
                </span><br>
                <p class="lead">Upload picture</p>
            </div>

            <div class="col-sm-6 col-md-3">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                  <i class="fa fa-picture-o fa-stack-1x"></i>
                </span><br>
                <p class="lead">Add watermark</p>
            </div>

            <div class="col-sm-6 col-md-3">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                  <i class="fa fa-qrcode fa-stack-1x"></i>
                </span><br>
                <p class="lead">Get QRcode</p>
            </div>
        </div>
    </div>
    <h3 class="text-center mt-4">Extra Features:</h3>
    <div class="row">
            <div class="col-sm-6 col-md-3">
            <div class="showdemo text-center">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                  <i class="fa fa-plus fa-stack-1x"></i>
                </span><br>
                <p class="lead">Set custom pattern<br> to QR codes</p>
            </div>
        </div>

            <div class="col-sm-6 col-md-3">
            <div class="showdemo text-center">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                  <i class="fa fa-map-marker fa-stack-1x"></i>
                </span><br>
                <p class="lead">Get location coordinates<br> with Google maps search</p>
            </div>
        </div>

            <div class="col-sm-6 col-md-3">
            <div class="showdemo text-center">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                  <i class="fa fa-paypal fa-stack-1x"></i>
                </span><br>
                <p class="lead">Paypal checkout<br>option</p>
            </div>
        </div>

            <div class="col-sm-6 col-md-3">
            <div class="showdemo text-center">
                <span class="fa-stack fa-4x">
                  <i class="fa fa-circle-thin fa-stack-2x"></i>
                  <i class="fa fa-bitcoin fa-stack-1x"></i>
                </span><br>
                <p class="lead">BitCoin payment<br>option</p>
            </div>
        </div>

    </div>
    <hr>
    <div class="row py-2 small mb-3">
      <div class="col-6"><?php echo qrcdr()->getString('title').' &copy; '.date('Y'); ?></div>
      <div class="col-6">
        <?php
        if (file_exists(dirname(dirname(__FILE__)).'/'.$relative.'template/modals.php')) {
            include dirname(dirname(__FILE__)).'/'.$relative.'template/modals.php';
        }
        ?>
      </div>
    </div>
  </div>
</div>
