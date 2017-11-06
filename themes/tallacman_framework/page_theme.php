<?php
namespace Concrete\Package\TallacmanFramework\Theme\TallacmanFramework;
use Concrete\Core\Page\Theme\Theme;
class PageTheme extends Theme {


	protected $pThemeGridFrameworkHandle = 'Juiced';

	public function registerAssets() {
		$this->providesAsset('javascript', 'slicknav.js');

		$this->providesAsset('css', 'blocks/form');
        $this->providesAsset('css', 'blocks/social_links');
        $this->providesAsset('css', 'blocks/share_this_page');
        $this->providesAsset('css', 'blocks/feature');
        $this->providesAsset('css', 'blocks/testimonial');
        $this->providesAsset('css', 'blocks/date_navigation');
        $this->providesAsset('css', 'blocks/topic_list');
        $this->providesAsset('css', 'blocks/faq');
        $this->providesAsset('css', 'blocks/tags');
        $this->providesAsset('css', 'core/frontend/*');
        $this->providesAsset('css', 'blocks/feature/templates/hover_description');

        $this->providesAsset('css', 'blocks/event_list');

        $this->requireAsset('css', 'font-awesome');
        $this->requireAsset('javascript', 'jquery');
        $this->requireAsset('javascript', 'picturefill');
        $this->requireAsset('javascript-conditional', 'html5-shiv');
        $this->requireAsset('javascript-conditional', 'respond');
	}

	public function getThemeBlockClasses()
	    {

	}

    public function getThemeResponsiveImageMap() {
        return array(
            'xlarge' => '1200px',
            'large' => '992px',
            'medium' => '768px',
            'small' => '0'
        );
    }
}
