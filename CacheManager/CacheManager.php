<?php

namespace Statamic\Addons\CacheManager;

use Statamic\API\Assets;
use Statamic\API\Cache;
use Statamic\API\Config;
use Statamic\API\Content;
use Statamic\API\Globals;
use Statamic\API\Stache;
use Statamic\Extend\Addon;

class CacheManager extends Addon
{

    /**
     * Update Stache
     * @return void
     */
    public function updateStache()
    {
        return Stache::update();
    }

    /**
     * Clear cache
     * @return void
     */
    public function clearCache()
    {
        return Cache::clear();
    }

    // /**
    //  * Clear static page cache
    //  * @return void
    //  */
    // public function clearStaticCache()
    // {
    //     return $this->cacher()->clear();
    // }

    // /**
    //  * Clear Pagespeed cache
    //  * @return bool
    //  */
    // public function clearPageSpeed()
    // {
    //     if (strpos(shell_exec('apache2ctl -M'), 'pagespeed_module') !== false || strpos(shell_exec('/usr/sbin/nginx-sp -V 2>&1 | grep -o ngx_pagespeed'), 'ngx_pagespeed') !== false || strpos(shell_exec('/usr/sbin/nginx -V 2>&1 | grep -o ngx_pagespeed'), 'ngx_pagespeed') !== false) {
    //         $ch = curl_init();
    //         $cache_url = Config::getSiteURL();
    //         $cache_query = '/pagespeed_admin/cache?purge=*';

    //         curl_setopt($ch, CURLOPT_URL, $cache_url . $cache_query);
    //         curl_setopt($ch, CURLOPT_HEADER, 0);
    //         curl_setopt($ch, CURLOPT_NOBODY, 1);
    //         curl_exec($ch);
    //         curl_close($ch);

    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
}
