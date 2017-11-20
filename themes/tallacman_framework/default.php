<?php        defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>


<header class="container full-width super-header justify-center">
    <div class="col-12 col-sm-10">
        <div class="container gutters justify-space-between items-center">
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
<div id="slicknav">
<!--   this holds the mobile menu  --> 
</div>

<header class="container full-width site-name-header items-center justify-center sticky"> <!--   sticky will keep this area in place on scroll down  -->
    <div class="col-12 col-sm-10">
        <div class="container gutters justify-space-between items-center">
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
            <div class="col-10">
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
        			<footer class="container gutters-all border-top">
        				<div class="col-12 col-sm-6">
                            <?php
                            $a = new GlobalArea('Global Copyright');
                            $a->display();
                            ?>
        				</div>
        				<div class="col-6 col-sm-3 text-right">
        					<?php
        					$a = new Area('Login');
        					$a->display($c);
        					?>
        				</div>
        				<div id="ccm-account-menu-container" class="col-6 col-sm-3">
        					<!--  this is new in c5 v8     -->
        				</div>
        			</footer>
        		</div>
        	</footer>

        </div>




<?php   $this->inc('elements/footer.php'); ?>
