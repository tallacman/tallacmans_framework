<?php
namespace Concrete\Package\TallacmanFramework;
use Concrete\Package\TallacmanFramework\Src\Juiced;
use Core;
use Package;
use PageTemplate;
use PageTheme;
use SinglePage;


defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{

    protected $pkgHandle = 'tallacman_framework';
    protected $appVersionRequired = '5.7.3';
    protected $pkgVersion = '0.9';
    protected $pkgAllowsFullContentSwap = false;


    public function getPackageName() {
        return t("Tallacman Framework");
    }

    public function getPackageDescription() {
        return t("Duck. Run.");
    }

    public function on_start(){
    $manager = Core::make('manager/grid_framework');
    $manager->extend('Juiced', function($app) {
        return new Juiced();
   	});
   }

    public function install() {
    $pkg = parent::install();


    // Install Single Pages
    $sp = SinglePage::add('/dashboard/tallacman_framework', $pkg);
    $sp = SinglePage::add('/dashboard/tallacman_framework/settings', $pkg);

   if(!PageTemplate::getByHandle('left_sidebar')) {
		PageTemplate::add('left_sidebar', 'Left Sidebar', 'left_sidebar.png', $pkg);
	}

	PageTheme::add('tallacman_framework', $pkg);
	}

}
