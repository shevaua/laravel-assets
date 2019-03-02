<?php

namespace Shevaua\LaravelAssets;

use Iterator;

/**
 * Object for storing group of asset
 */
class AssetGroup implements Iterator
{

    /**
     * Collection of assets
     * 
     * @var Asset[] $assets
     */
    private $assets = [];

    /**
     * Add asset to the group
     * 
     * @param Asset $asset
     * @return self
     */
    public function add(Asset $asset): self
    {
        $this->assets[] = $asset;
        return $this;
    }

    /**
     * Get qty of assets
     * 
     * @return int
     */
    public function count(): int
    {
        return count($this->assets);
    }

    /**
     * Key for the Iterator 
     * 
     * @var int $key
     */
    private $key;

    public function key(): int
    {
        return $this->key;
    }

    public function current()
    {
        if(isset($this->assets[$this->key]))
        {
            return $this->assets[$this->key];
        }
    }

    public function next(): void
    {
        $this->key++;
    }

    public function rewind(): void
    {
        $this->key = 0;
    }

    public function valid(): bool
    {
        return isset($this->assets[$this->key]);   
    }

}
