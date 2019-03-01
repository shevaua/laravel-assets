<?php

namespace Shevaua\LaravelAssets;

/**
 * Object for storing asset
 */
class Asset
{

    /**
     * @var string $path
     */
    private $path;

    /**
     * @var string $version
     */
    private $version;

    /**
     * Constructor
     * 
     * @param string $path Full uri to the asset
     * @param string $version Version of the asset
     */
    public function __construct(string $path, string $version = '')
    {
        $this->path = $path;
        $this->version = $version;
    }

    /**
     * Get path of the asset
     * 
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Get version of the asset
     * 
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

}
