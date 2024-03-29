<?php declare(strict_types=1);

use SimpleSAML\Module;

if (! empty($this->data['htmlinject']['htmlContentPost'])) {
    foreach ($this->data['htmlinject']['htmlContentPost'] as $c) {
        echo $c;
    }
}
?>
</div><!-- #content -->
</div><!-- #wrap -->

<div id="footer">

    <div style="margin: 0px auto; max-width: 1000px;">

        <div style="float: left;">
            <img src="<?php echo Module::getModuleUrl('bbmri/res/img/BBMRI-ERIC-gateway-for-health_216.png') ?>">
        </div>

        <div style="float: left;">
            <p>BBMRI-ERIC, Neue Stiftingtalstrasse 2/B/6, 8010 Graz, Austria
                &nbsp; &nbsp; +43 316 34 99 17-0 &nbsp;
                <a href="mailto:contact@bbmri-eric.eu">contact@bbmri-eric.eu</a>
            </p>
            <p>Copyright © BBMRI-ERIC <?php echo date('Y'); ?> </p>
        </div>
    </div>

</div><!-- #footer -->

</body>
</html>
