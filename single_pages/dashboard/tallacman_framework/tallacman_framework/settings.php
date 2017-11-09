<?php
/**
 * @project:   Bitter Theme for conrete5.
 * 
 * @author     Fabian Bitter
 * @copyright  (C) 2017 Bitter Webentwicklung (www.bitter-webentwicklung.de)
 * @version    1.2.1
 */
defined('C5_EXECUTE') or die('Access Denied.');

Core::make('help')->display(t("For support requests please contact kontakt@bitter-webentwicklung.de."));

$pageSelector = Core::make('helper/form/page_selector');
?>


<div class="row">
    <div class="col-xs-12">
        <form action="#" method="post">
            <fieldset>
                <legend>
                    <?php echo t("Settings"); ?>
                </legend>

                <div class="form-group">
                    <?php echo $form->label("searchPage", t("Search Page")); ?>

                    <?php echo $pageSelector->selectPage("searchPage", $settings->getSearchPage()); ?>
                </div>

                <div class="checkbox">
                    <label>
                        <?php echo $form->checkbox("fixedLayout", 1, $settings->getFixedLayout()); ?> <?php echo t("Fixed Layout"); ?>
                    </label>
                </div>
            </fieldset>

            <div class="ccm-dashboard-form-actions-wrapper">
                <div class="ccm-dashboard-form-actions">

                    <div class="pull-right">

                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save" aria-hidden="true"></i> <?php echo t("Save"); ?>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

