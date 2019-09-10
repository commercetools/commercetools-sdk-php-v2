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
 * @implements Builder<ImageDimensions>
 */
final class ImageDimensionsBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?int
     */
    protected $w;
    
    /**
     * @var ?int
     */
    protected $h;

    /**
     *
     * @return int|null
     */
    final public function getW()
    {
       return $this->w;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getH()
    {
       return $this->h;
    }
    /**
     * @return $this
     */
    final public function withW(?int $w)
    {
        $this->w = $w;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withH(?int $h)
    {
        $this->h = $h;
        
        return $this;
    }
    
    public function build(): ImageDimensions {
        return new ImageDimensionsModel(
            $this->w,
            $this->h
        );
    }
    
    public static function of(): ImageDimensionsBuilder
    {
        return new self();
    }
}