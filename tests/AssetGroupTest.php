<?php

namespace Shevaua\LaravelAssets;

use PHPUnit\Framework\TestCase;

class AssetGroupTest extends TestCase
{

    public function testAssetGroup()
    {

        $group = new AssetGroup();
        $this->assertEquals($group->count(), 0);
        $group->add(new Asset('/test'));
        $this->assertEquals($group->count(), 1);

    }

    public function testAssetGroup2()
    {

        $group = new AssetGroup();
        for($i = 0; $i < 5; $i++)
        {
            $group->add(new Asset('/test'.$i));
        }
        $this->assertEquals($group->count(), 5); 
        $this->assertEquals($i, 5);
        foreach($group as $asset)
        {
            $i--;
        }
        $this->assertEquals($i, 0);

    }

}
