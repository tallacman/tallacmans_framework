<?php        defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<!doctype html>
<html class="no-js" lang="<?php       echo Localization::activeLanguage()?>">
<head>
<?php        View::element('header_required'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php       echo $html->css($view->getStylesheet('main.less'))?>

<link rel="stylesheet" href="<?php echo $this->getThemePath()?>/css/styles.css" />

<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>


<?php
  if ($c->isEditMode()) { ?>

    <style media="screen">
    .col-sm-1 {
        width: 7.833% !important
    }

    .col-sm-2 {
        width: 16.166% !important
    }

    .col-sms-3 {
        width: 24.5% !important
    }

    .col-sm-4 {
        width: 32.833% !important
    }

    .col-sm-5 {
        width: 41.166% !important
    }

    .col-sm-6 {
        width: 49.5% !important
    }

    .col-sm-7 {
        width: 57.833% !important
    }

    .col-sm-8 {
        width: 66.166% !important
    }

    .col-sm-9 {
        width: 74.5% !important
    }

    .col-sm-10 {
        width: 82.833% !important
    }

    .col-sm-11 {
        width: 91.166% !important
    }

    .col-sm-12 {
        width: 99.5% !important
    }

    .col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12 {
        float: left !important;
    }
    </style>
  <?php } ?>


</head>

<body>
    <div class="<?php       echo $c->getPageWrapperClass()?>">
        <div class="full-height">

        <div id="slicknav">
<!--  slicknav gets attached here     -->
        </div>
