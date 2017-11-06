<?php        defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>


<div class="container full-width">
    <div class="col-12">
        <?php
         $a = new Area('One Page');
         $a->display($c);
         ?>
    </div>
</div>




<?php   $this->inc('elements/footer.php'); ?>
