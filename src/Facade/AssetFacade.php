<?php

namespace Shevaua\LaravelAssets\Facade;

use Shevaua\LaravelAssets\Asset;
use Shevaua\LaravelAssets\Exception\InvalidAssetConfiguration;

/**
 * Facade for working with asset
 */
class AssetFacade
{

    /**
     * Create an asset object
     * 
     * @param string $asset
     * @throws InvalidAssetConfiguration
     * @return Asset 
     */
    public static function create(string $asset): Asset 
    {

        $parts = explode(':', $asset);
        if($asset)
        {
            switch(count($parts))
            {
                case 1: return new Asset($asset);
                case 2: return new Asset($parts[0], $parts[1]);
            }
        }
        throw new InvalidAssetConfiguration($asset);
        
    }

}
