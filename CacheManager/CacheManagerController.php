<?php

namespace Statamic\Addons\CacheManager;

use Statamic\Extend\Controller;
use Log;

class CacheManagerController extends Controller
{
    /** @var CacheManager */
    private $cachemanager;

    /**
     * Initialize Aggregator functions
     */
    protected function init()
    {
        $this->cachemanager = new CacheManager();
    }

    /**
     * Clear Statamic cache
     */
    public function clearAll()
    {
        try {
            // Update feed
            $this->cachemanager->clearCache();

            // Log success returns
            Log::info('All cache cleared successfully');

            // Return back to dashboard with success message
            return back()->with('success', 'All cache cleared successfully');
        } catch (\Exception $e) {
            Log::error('Problem clearing your cache');
            return back()->withErrors('error', ' Problem clearing your all/one of cache' . $e);
        }
    }


    /**
     * Update Stache cache
     */
    public function updateStache()
    {
        try {
            // Update feed
            $this->cachemanager->updateStache();

            // Log success returns
            Log::info('Stache updated successfully');

            // Return back to dashboard with success message
            return back()->with('success', 'Stache updated successfully');
        } catch (\Exception $e) {
            Log::error('Problem updating your stache');
            return back()->withErrors('error', ' Problem updating your stache' . $e);
        }
    }


    /**
     * Clear Statamic cache
     */
    public function clearCache()
    {

        try {
            // Update feed
            $this->cachemanager->clearCache();

            // Log success returns
            Log::info('Cache cleared successfully');

            // Return back to dashboard with success message
            return back()->with('success', 'Cache cleared successfully');
        } catch (\Exception $e) {
            Log::error('Problem clearing your cache');
            return back()->withErrors('error', ' Problem clearing your cache' . $e);
        }
    }


    // /**
    //  * Clear Statamic cache
    //  * @return void
    //  */
    // public function clearStaticCache()
    // {

    //     try {
    //         // Update feed
    //         $this->cachemanager->clearStaticCache();

    //         // Log success returns
    //         Log::info('Static page cache cleared successfully');

    //         // Return back to dashboard with success message
    //         return back()->with('success', 'Static page cache cleared successfully');
    //     } catch (Exception $e) {
    //         Log::error('Problem clearing your Static page cache');
    //         return back()->withErrors('error', ' Problem clearing your Static page cache' . $e);
    //     }
    // }


    // /**
    //  * Clear Pagespeed cache
    //  * @return void
    //  */
    // public function clearPageSpeed()
    // {

    //     try {
    //         // Update feed
    //         $this->cachemanager->clearPageSpeed();

    //         // Log success returns
    //         Log::info('Pagespeed cache cleared successfully');

    //         // Return back to dashboard with success message
    //         return back()->with('success', 'Pagespeed cache cleared successfully');
    //     } catch (Exception $e) {
    //         Log::error('Problem clearing your Pagespeed cache');
    //         return back()->withErrors('error', ' Problem clearing your Pagespeed cache' . $e);
    //     }
    // }


    // /**
    //  * Clear PHP OpCache cache
    //  * @return void
    //  */
    // public function clearOpCache()
    // {

    //     try {
    //         // Update feed
    //         $this->cachemanager->clearOpCache();

    //         // Log success returns
    //         Log::info('OPCache cleared successfully');

    //         // Return back to dashboard with success message
    //         return back()->with('success', 'OPCache cache cleared successfully');
    //     } catch (Exception $e) {
    //         Log::error('Problem clearing your OPCache cache');
    //         return back()->withErrors('error', ' Problem clearing your OPCache cache' . $e);
    //     }
    // }
}
