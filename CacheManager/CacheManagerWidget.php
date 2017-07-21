<?php

namespace Statamic\Addons\CacheManager;

use Statamic\Extend\Widget;

class CacheManagerWidget extends Widget
{
    /**
     * The HTML that should be shown in the widget
     *
     * @return string
     */
    public function html()
    {
        // Get settings
        $github_page = $this->getMeta()['url'];

        return $this->view('widget', compact('github_page'))->render();
    }
}
