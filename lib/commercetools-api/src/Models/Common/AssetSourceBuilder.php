<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AssetSource>
 */
final class AssetSourceBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $contentType;
    
    /**
     * @var ?string
     */
    protected $uri;
    
    /**
     * @var ?string
     */
    protected $key;
    
    /**
     * @var ?AssetDimensionsBuilder|AssetDimensions
     */
    protected $dimensions;

    /**
     *
     * @return string|null
     */
    final public function getContentType()
    {
       return $this->contentType;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getUri()
    {
       return $this->uri;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getKey()
    {
       return $this->key;
    }
    
    /**
     *
     * @return AssetDimensions|null
     */
    final public function getDimensions()
    {
       return ($this->dimensions instanceof AssetDimensionsBuilder ? $this->dimensions->build() : $this->dimensions);
    }
    /**
     * @return $this
     */
    final public function withContentType(?string $contentType)
    {
        $this->contentType = $contentType;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withUri(?string $uri)
    {
        $this->uri = $uri;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withKey(?string $key)
    {
        $this->key = $key;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDimensions(?AssetDimensions $dimensions)
    {
        $this->dimensions = $dimensions;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withDimensionsBuilder(?AssetDimensionsBuilder $dimensions)
    {
        $this->dimensions = $dimensions;
        
        return $this;
    }
    
    public function build(): AssetSource {
        return new AssetSourceModel(
            $this->contentType,
            $this->uri,
            $this->key,
            ($this->dimensions instanceof AssetDimensionsBuilder ? $this->dimensions->build() : $this->dimensions)
        );
    }
    
    public static function of(): AssetSourceBuilder
    {
        return new self();
    }
}