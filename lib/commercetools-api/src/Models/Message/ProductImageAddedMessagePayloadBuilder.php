<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Api\Models\Common\Image;
use Commercetools\Api\Models\Common\ImageBuilder;

/**
 * @implements Builder<ProductImageAddedMessagePayload>
 */
final class ProductImageAddedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ImageBuilder|Image
     */
    protected $image;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
    /**
     * @var ?int
     */
    protected $variantId;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       return $this->type;
    }
    
    /**
     *
     * @return Image|null
     */
    final public function getImage()
    {
       return ($this->image instanceof ImageBuilder ? $this->image->build() : $this->image);
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       return $this->staged;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVariantId()
    {
       return $this->variantId;
    }
    /**
     * @return $this
     */
    final public function withType(?string $type)
    {
        $this->type = $type;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withImage(?Image $image)
    {
        $this->image = $image;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withStaged(?bool $staged)
    {
        $this->staged = $staged;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withImageBuilder(?ImageBuilder $image)
    {
        $this->image = $image;
        
        return $this;
    }
    
    public function build(): ProductImageAddedMessagePayload {
        return new ProductImageAddedMessagePayloadModel(
            $this->type,
            ($this->image instanceof ImageBuilder ? $this->image->build() : $this->image),
            $this->staged,
            $this->variantId
        );
    }
    
    public static function of(): ProductImageAddedMessagePayloadBuilder
    {
        return new self();
    }
}