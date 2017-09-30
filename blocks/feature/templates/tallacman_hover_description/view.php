<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php if ($linkURL) {
    ?>
    <a href="<?php echo $linkURL?>">
<?php
} ?>
<div class="ccm-block-feature-item-hover-wrapper">
    <div class="ccm-block-feature-item-hover">
        <div class="ccm-block-feature-item-hover-icon">
            <i class="fa fa-<?php echo $icon?>"></i>
        </div>
    </div>
    <div class="ccm-block-feature-item-hover-title">
        <h3><?php echo h($title)?></h3>
    </div>
    <div class="ccm-block-feature-item-text">
        <?php echo h(strip_tags($paragraph))?>
    </div>
</div>


<?php if ($linkURL) {
    ?>
    </a>
<?php
} ?>
