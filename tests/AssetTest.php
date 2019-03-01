<?php

namespace Shevaua\LaravelAssets;

use PHPUnit\Framework\TestCase;

class AssetTest extends TestCase
{

    public function testAssetConstruct()
    {
        
        $e = null;
        try
        {
            new Asset('/asset.example');
            new Asset('/asset.example', '111');
        }
        catch(\Throwable $e)
        {}
        $this->assertnull($e);

    }

    public function testAsset()
    {
        
        $path = '/img/test.png';
        $version = '111';
        $asset = new Asset($path, $version);
        $this->assertEquals($asset->getPath(), $path);
        $this->assertEquals($asset->getVersion(), $version);

        $asset = new Asset($path);
        $this->assertEquals($asset->getPath(), $path);
        $this->assertEquals($asset->getVersion(), '');

    }

}
