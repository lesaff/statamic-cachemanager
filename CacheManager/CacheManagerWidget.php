<?php

namespace Statamic\Addons\CacheManager;

use Statamic\API\Config;
use Statamic\Extend\Widget;

class CacheManagerWidget extends Widget
{

    /**
     * Initialize CacheManager functions
     * @return [type] [description]
     */
    protected function init()
    {
        $this->cachemanager = new CacheManager;
    }


    /**
     * The HTML that should be shown in the widget
     *
     * @return string
     */
    public function html()
    {
        // Get settings
        $settings = $this->getConfig();
        $cp_path = CP_ROUTE;

        return $this->view('index', compact('settings', 'cp_path'))->render();
    }
}
