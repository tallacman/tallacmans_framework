<?php

/**
 * @project:   Bitter Theme for conrete5.
 *
 * @author     Fabian Bitter
 * @copyright  (C) 2017 Bitter Webentwicklung (www.bitter-webentwicklung.de)
 * @version    1.2.1
 */

namespace Concrete\Package\TallacmanFramework\Controller\SinglePage\Dashboard\TallacmanFramework;

use \Concrete\Core\Page\Controller\DashboardPageController;
use Concrete\Core\Support\Facade\Application;

class Settings extends DashboardPageController {

    public function view() {
        $app = Application::getFacadeApplication();

        /**
         * @var $settings Concrete\Package\BitterTheme\Src\ThemeSettings
         */
        $settings = $app->make("ThemeSettings");

        if ($this->request->isPost()) {
            $settings->setSearchPage($this->post("searchPage"));
            $settings->setFixedLayout($this->post("fixedLayout") !== null);
        }

        $this->set("settings", $settings);
    }

}
