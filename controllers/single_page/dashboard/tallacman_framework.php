<?php

/**
 * @project:   Bitter Theme for conrete5.
 *
 * @author     Fabian Bitter
 * @copyright  (C) 2017 Bitter Webentwicklung (www.bitter-webentwicklung.de)
 * @version    1.2.1
 */

namespace Concrete\Package\TallacmanFramework\Controller\SinglePage\Dashboard;

use \Concrete\Core\Page\Controller\DashboardPageController;

class TallacmanFramework extends DashboardPageController {

    public function view() {
        $this->redirect("/dashboard/tallacman_framework/settings");
    }

}
