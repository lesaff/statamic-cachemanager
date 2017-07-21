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
     * @return string
     */
    public function initCacheManager()
    {
        return $this->css->tag('cachemanager.css');
    }
}
