<?php

namespace Statamic\Addons\CacheManager;

use Statamic\API\Cache;
use Statamic\API\Stache;

class CacheManager
{

    /**
     * Update Stache
     */
    public function updateStache()
    {
        Stache::update();
    }

    /**
     * Clear cache
     */
    public function clearCache()
    {
        Cache::clear();
    }

    public function clearGlide()
    {
        \Please::call('clear:glide');
    }
}
