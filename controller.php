<?php
namespace Concrete\Package\ThemeKansas;
use Concrete\Package\ThemeKansas\Src\Juiced;
use Core;
use Package;
use PageTemplate;
use PageTheme;

defined('C5_EXECUTE') or die(_("Access Denied."));

class Controller extends Package
{

    protected $pkgHandle = 'theme_kansas';
    protected $appVersionRequired = '5.7.3';
    protected $pkgVersion = '0.9';
    protected $pkgAllowsFullContentSwap = false;

    public function getPackageName() {
        return t("Kansas Theme by tallacman");
    }

    public function getPackageDescription() {
        return t("Dorothy. Toto.");
    }

public function on_start(){
    $manager = Core::make('manager/grid_framework');
    $manager->extend('Juiced', function($app) {
        return new Juiced();
   	});
   }

    public function install() {
    $pkg = parent::install();

    $small = \Concrete\Core\File\Image\Thumbnail\Type\Type::getByHandle('small');
    		if (!is_object($small)) {
    			$type = new \Concrete\Core\File\Image\Thumbnail\Type\Type();
    			$type->setName('Small');
    			$type->setHandle('small');
    			$type->setWidth(740);
    			$type->save();
    		}
    $medium = \Concrete\Core\File\Image\Thumbnail\Type\Type::getByHandle('medium');
    		if (!is_object($medium)) {
    			$type = new \Concrete\Core\File\Image\Thumbnail\Type\Type();
    			$type->setName('Medium');
    			$type->setHandle('medium');
    			$type->setWidth(940);
    			$type->save();
    		}
    $large = \Concrete\Core\File\Image\Thumbnail\Type\Type::getByHandle('large');
    		if (!is_object($large)) {
    			$type = new \Concrete\Core\File\Image\Thumbnail\Type\Type();
    			$type->setName('Large');
    			$type->setHandle('large');
    			$type->setWidth(1200);
    			$type->save();
    		}

   if(!PageTemplate::getByHandle('left_sidebar')) {
		PageTemplate::add('left_sidebar', 'Left Sidebar', 'left_sidebar.png', $pkg);
	}


	PageTheme::add('kansas', $pkg);
	}

}
