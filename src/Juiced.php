<?php
namespace Concrete\Package\TallacmanFramework\Src;
use Concrete\Core\Page\Theme\GridFramework\GridFramework;

class Juiced extends GridFramework
{
    public function supportsNesting(){
        return 'true';
    }

  public function getPageThemeGridFrameworkName()
    {
        return t('Juiced');
    }

        public function getPageThemeGridFrameworkRowStartHTML()
        {
            return '<div class="container full-width gutters row-start">';
        }

        public function getPageThemeGridFrameworkRowEndHTML()
        {
            return '</div>';
        }

        public function getPageThemeGridFrameworkContainerStartHTML()
        {
            return '<div class="container gutters container-start">';
        }

        public function getPageThemeGridFrameworkContainerEndHTML()
        {
            return '</div>';
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
            // no offsets
        );
        return $offsets;
    }
    public function getPageThemeGridFrameworkColumnAdditionalClasses()
    {
        return 'nested-columns';
    }

    public function getPageThemeGridFrameworkColumnOffsetAdditionalClasses()
    {
        return '';
    }

    public function getPageThemeGridFrameworkHideOnExtraSmallDeviceClass()
    {
        return 'xs-display-none';
    }

    public function getPageThemeGridFrameworkHideOnSmallDeviceClass()
    {
        return 'sm-display-none';
    }

    public function getPageThemeGridFrameworkHideOnMediusmeviceClass()
    {
        return 'md-display-none';
    }

    public function getPageThemeGridFrameworkHideOnLargeDeviceClass()
    {
        return 'lg-display-none';
    }


}
