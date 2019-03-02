<?php

namespace Shevaua\LaravelAssets;

use PHPUnit\Framework\TestCase;
use Shevaua\LaravelAssets\Facade\AssetFacade;
use Shevaua\LaravelAssets\Exception\InvalidAssetConfiguration;

class AssetFacadeTest extends TestCase
{


    public function testAssetFacade()
    {
        
        $e = null;
        try
        {
            AssetFacade::create('/test');
            AssetFacade::create('/test:11');
        }
        catch(InvalidAssetConfiguration $e)
        {}
        $this->assertNull($e); 
        
    }

    public function testAssetFacade2()
    {
        
        $e = null;
        try
        {
            AssetFacade::create('');
        }
        catch(InvalidAssetConfiguration $e)
        {}
        $this->assertNotNull($e); 
        
    }

    public function testAssetFacade3()
    {
        
        $e = null;
        try
        {
            AssetFacade::create('::');
        }
        catch(InvalidAssetConfiguration $e)
        {}
        $this->assertNotNull($e);
        
    }

}
