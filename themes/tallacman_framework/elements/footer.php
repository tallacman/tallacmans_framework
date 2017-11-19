<?php        defined('C5_EXECUTE') or die(_("Access Denied.")); ?>

        </div> <!--  end ccm-page wrapper   -->

    <!--  theme javascripts     -->
    <script src="<?php       echo $this->getThemePath()?>/js/slicknav.js"> </script>

    <script>
    $('#menu').slicknav({
    label: '',
    duration: 200,
    easingOpen: 'swing',
    easingClose: 'swing',
    closedSymbol: '▼',
    openedSymbol: '▲',
    prependTo: '#slicknav',
    appendTo: '',
    parentTag: 'a',
    closeOnClick: false,
    allowParentLinks: true,
    nestedParentLinks: true,
    showChildren: false,
    removeIds: true,
    removeClasses: false,
    removeStyles: false,
    // inserts sitename into slicknav on mobile screens
    // brand:''
    brand: '<a href="<?php          echo DIR_REL?>/"><?php          echo h(Config::get('concrete.site')); ?></a>'
    });
    </script>

<!--   this is for the sticky nav feature if enabled  -->
<!--   add class "sticky" to area desired  --> 
<script type="text/javascript">
    $(window).scroll(function(){
    var sticky = $('.sticky'),
      scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
    });
</script>

<?php        View::element('footer_required'); ?>

</body>
</html>
