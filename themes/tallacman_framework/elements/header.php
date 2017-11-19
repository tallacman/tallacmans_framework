<?php        defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

<!doctype html>
<html class="no-js" lang="<?php       echo Localization::activeLanguage()?>">
<head>
<?php        View::element('header_required'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php       echo $html->css($view->getStylesheet('main.less'))?>


<!-- the below link is for initial construction -->
<!-- css will roll into main.less  -->

<link rel="stylesheet" href="<?php echo $this->getThemePath()?>/css/styles.css" />
<!--   modenizer must be called in the header  -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

</head>

<body>
    <div class="<?php       echo $c->getPageWrapperClass()?>"> <!--   required by concrete5 marketplace  --> 
