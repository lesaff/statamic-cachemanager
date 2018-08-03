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


    /**
     * Clear Glide cache
     */
    public function clearGlide()
    {

        try {
            $this->cachemanager->clearGlide();

            // Log success returns
            Log::info('Glide cache cleared successfully');

            // Return back to dashboard with success message
            return back()->with('success', 'Glide cache cleared successfully');
        } catch (\Exception $e) {
            Log::error('Problem clearing glide cache');
            return back()->withErrors('error', ' Problem clearing glide cache' . $e);
        }
    }
}
