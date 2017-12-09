<?php        defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

<div id="slicknav" class="sticky full-width"> <!--   fixed on scroll via the sticky class : full-width  -->
<!--   this holds the mobile menu  -->
</div>


<header class="container full-width super-header justify-center cta">
    <div class="col-12">
        <div class="container justify-space-between items-center gutters">
            <div class="col-auto">
                <?php
                $a = new GlobalArea('Call To Action One');
                $a->display();
                ?>
            </div>
            <div class="col-auto">
                <?php
                $a = new GlobalArea('Call To Action Two');
                $a->display();
                ?>
            </div>

        </div>
    </div>
</header>


<header class="container full-width site-name-header items-center justify-center sticky header"> <!--   sticky will keep this area in place on scroll down  -->
    <div class="col-12 col-sm-12">
        <div class="container justify-space-between items-center gutters">
            <div class="col-auto sitename">
                <?php
                $a = new GlobalArea('Header Site Title');
                $a->display();
                ?>
            </div>
            <nav class="col-auto">
                <?php
                $a = new GlobalArea('Header Navigation');
                $a->setCustomTemplate('autonav', 'slicknav');
                $a->display();
                ?>
            </nav>
        </div>
    </div>
</header>
<header class="container full-width lead">
    <div class="col-12">
        <?php
        $a = new Area('Full Width Lead');
        $a->setAreaGridMaximumColumns(12);
        $a->display($c);
        ?>

    </div>

</header>

        <main class="container full-width content justify-center">
            <div class="col-12">
                <div class="container gutters">
                    <div class="col-12">
                        <?php
                        $a = new Area('Main');
                        $a->setAreaGridMaximumColumns(12);
                        $a->display($c);
                        ?>
                    </div>
                </div>
            </div>
        </main>



        	<footer class="container full-width">
        		<div class="col-12">
        			<div class="container border-top gutters">
        				<div class="col-12 col-sm-6">
                            <?php
                            $a = new GlobalArea('Global Footer One');
                            $a->display();
                            ?>
                            <?php
                            $a = new Area('Footer One');
                            $a->display($c);
                            ?>
        				</div>
        				<div class="col-6 col-sm-3 text-right">
                            <?php
                            $a = new Area('Footer Two');
                            $a->display($c);
                            ?>
        					<?php
        					$a = new GlobalArea('Global Footer Two');
        					$a->display();
        					?>
        				</div>
        				<div id="ccm-account-menu-container" class="col-6 col-sm-3">
        					<!--  this is new in c5 v8     -->
        				</div>
        			</div>
        		</div>
        	</footer>

        </div>



<?php   $this->inc('elements/footer.php'); ?>
