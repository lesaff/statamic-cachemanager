<?php

namespace Statamic\Addons\CacheManager;

use Statamic\Extend\Listener;

class CacheManagerListener extends Listener
{
    /**
     * The events to be listened for, and the methods to call.
     *
     * @var array
     */
    public $events = [
        'cp.add_to_head'  => 'initCacheManager',
    ];


    /**
     * Initialize Aggregator assets
     * @return [type] [description]
     */
    public function initCacheManager()
    {
        $addon_css = $this->css->url('cachemanager.css');
        $html = '<link rel="stylesheet" href="' . $addon_css . '">';
        return $html;
    }
}
