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
 * @implements Builder<Image>
 */
final class ImageBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $label;
    
    /**
     * @var ?string
     */
    protected $url;
    
    /**
     * @var ?ImageDimensionsBuilder|ImageDimensions
     */
    protected $dimensions;

    /**
     *
     * @return string|null
     */
    final public function getLabel()
    {
       return $this->label;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getUrl()
    {
       return $this->url;
    }
    
    /**
     *
     * @return ImageDimensions|null
     */
    final public function getDimensions()
    {
       return ($this->dimensions instanceof ImageDimensionsBuilder ? $this->dimensions->build() : $this->dimensions);
    }
    /**
     * @return $this
     */
    final public function withLabel(?string $label)
    {
        $this->label = $label;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withUrl(?string $url)
    {
        $this->url = $url;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withDimensions(?ImageDimensions $dimensions)
    {
        $this->dimensions = $dimensions;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withDimensionsBuilder(?ImageDimensionsBuilder $dimensions)
    {
        $this->dimensions = $dimensions;
        
        return $this;
    }
    
    public function build(): Image {
        return new ImageModel(
            $this->label,
            $this->url,
            ($this->dimensions instanceof ImageDimensionsBuilder ? $this->dimensions->build() : $this->dimensions)
        );
    }
    
    public static function of(): ImageBuilder
    {
        return new self();
    }
}