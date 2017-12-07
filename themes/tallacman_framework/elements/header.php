<?php        defined('C5_EXECUTE') or die(_("Access Denied.")); ?> <!--   older version of allowable DIE stmt  -->

<!doctype html> <!--   HTML 5  -->
<html class="no-js" lang="<?php       echo Localization::activeLanguage()?>">
<head>
<?php        View::element('header_required'); ?>
<meta name="viewport" content="width=device-width, initial-scale=1"> <!--   https://twitter.com/zeldman/status/651114499290697728  -->

<?php       echo $html->css($view->getStylesheet('main.less'))?> <!--   All css encoded as less grouped here  -->

<!-- the below link is for initial construction -->
<!-- css will roll into main.less  -->

<link rel="stylesheet" href="<?php echo $this->getThemePath()?>/css/styles.css" />
<!--   modenizer must be called in the header  -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script> <!--   version needed for slicknav  -->

</head>

<body>
    <div class="<?php       echo $c->getPageWrapperClass()?>"> <!--   required by concrete5 interface closes in footer.php  -->
