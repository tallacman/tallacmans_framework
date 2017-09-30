<?php
namespace Concrete\Package\ThemeKansas\Src;
use Concrete\Core\Page\Theme\GridFramework\GridFramework;

class Juiced extends GridFramework
{

  public function getPageThemeGridFrameworkName()
    {
        return t('Juiced');
    }

    public function getPageThemeGridFrameworkRowStartHTML()
    {
        return '<div class="container gutters">';
    }

    public function getPageThemeGridFrameworkRowEndHTML()
    {
        return '</div>';
    }

    public function getPageThemeGridFrameworkContainerStartHTML()
    {
        return '';
    }

    public function getPageThemeGridFrameworkContainerEndHTML()
    {
        return '';
    }


    public function getPageThemeGridFrameworkColumnClasses()
    {
        $columns = array(
            'col-sm-1',
            'col-sm-2',
            'col-sm-3',
            'col-sm-4',
            'col-sm-5',
            'col-sm-6',
            'col-sm-7',
            'col-sm-8',
            'col-sm-9',
            'col-sm-10',
            'col-sm-11',
            'col-sm-12',
        );
        return $columns;
    }

    public function getPageThemeGridFrameworkColumnOffsetClasses()
    {
        $offsets = array(
            'col-sm-push-1',
            'col-sm-push-2',
            'col-sm-push-3',
            'col-sm-push-4',
            'col-sm-push-5',
            'col-sm-push-6',
            'col-sm-push-7',
            'col-sm-push-8',
            'col-sm-push-9',
            'col-sm-push-10',
            'col-sm-push-11',
            'col-sm-push-12',
        );
        return $offsets;
    }
    public function getPageThemeGridFrameworkColumnAdditionalClasses()
    {
        return '';
    }

    public function getPageThemeGridFrameworkColumnOffsetAdditionalClasses()
    {
        return '';
    }

    public function getPageThemeGridFrameworkHideOnExtraSmallDeviceClass()
    {
        return 'hidden-xs';
    }

    public function getPageThemeGridFrameworkHideOnSmallDeviceClass()
    {
        return 'hidden-sm';
    }

    public function getPageThemeGridFrameworkHideOnMediusmeviceClass()
    {
        return 'hidden-sm';
    }

    public function getPageThemeGridFrameworkHideOnLargeDeviceClass()
    {
        return 'hidden-lg';
    }

    public function supportsNesting(){
        return 'false';
    }
}
