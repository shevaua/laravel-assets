<?php

namespace Shevaua\LaravelAssets\Exception;

use Exception;

class InvalidAssetConfiguration extends Exception
{

    /**
     * @param string $asset
     */
    public function __construct(string $asset)
    {
        parent::__construct('Wrong asset configuration: \''.$asset.'\'');
    }

}
