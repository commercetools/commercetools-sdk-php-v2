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
use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Api\Models\Product\ProductVariantBuilder;

/**
 * @implements Builder<ProductVariantDeletedMessagePayload>
 */
final class ProductVariantDeletedMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?array
     */
    protected $removedImageUrls;
    
    /**
     * @var ?ProductVariantBuilder|ProductVariant
     */
    protected $variant;

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
     * @return array|null
     */
    final public function getRemovedImageUrls()
    {
       return $this->removedImageUrls;
    }
    
    /**
     *
     * @return ProductVariant|null
     */
    final public function getVariant()
    {
       return ($this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant);
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
    final public function withRemovedImageUrls(?array $removedImageUrls)
    {
        $this->removedImageUrls = $removedImageUrls;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVariant(?ProductVariant $variant)
    {
        $this->variant = $variant;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withVariantBuilder(?ProductVariantBuilder $variant)
    {
        $this->variant = $variant;
        
        return $this;
    }
    
    public function build(): ProductVariantDeletedMessagePayload {
        return new ProductVariantDeletedMessagePayloadModel(
            $this->type,
            $this->removedImageUrls,
            ($this->variant instanceof ProductVariantBuilder ? $this->variant->build() : $this->variant)
        );
    }
    
    public static function of(): ProductVariantDeletedMessagePayloadBuilder
    {
        return new self();
    }
}