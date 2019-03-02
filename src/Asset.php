<?php

namespace Shevaua\LaravelAssets;

/**
 * Object for storing asset
 */
class Asset
{

    const TYPE_JS = 'js';
    const TYPE_CSS = 'css';
    const TYPE_UNKNOWN = 'unknown';

    const REGEX_EXT = '#\.(\w+)$#';

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

    /**
     * Get type of the asset
     * 
     * @return string
     */
    public function getType(): string
    {
        if(
            preg_match(self::REGEX_EXT, $this->path, $matches)
            and in_array($matches[1], [
                self::TYPE_CSS,
                self::TYPE_JS,
            ])
        ) {
            return $matches[1];
        }
        return self::TYPE_UNKNOWN;
    }

    /**
     * Get uri for the asset
     * 
     * @return string
     */
    public function getUri(): string
    {
        $uri = $this->getPath();
        if($this->version)
        {
            $uri .= '?v='.$this->version;
        }
        return $uri;
    }

}
