<?php

namespace Shevaua\LaravelAssets\Facade;

use Shevaua\LaravelAssets\AssetGroup;

/**
 * Facade for working with group of assets
 */
class AssetGroupFacade
{

    /**
     * Create an asset group object
     * 
     * @param array $assets
     * @return AssetGroup
     */
    public static function create(array $assets): AssetGroup 
    {

        $group = new AssetGroup;
        foreach($assets as $asset)
        {
            $group->add(AssetFacade::create($asset));
        }
        return $group;

    }

}
