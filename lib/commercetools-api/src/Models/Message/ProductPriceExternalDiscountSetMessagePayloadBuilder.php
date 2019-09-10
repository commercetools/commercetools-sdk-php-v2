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
use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\DiscountedPriceBuilder;

/**
 * @implements Builder<ProductPriceExternalDiscountSetMessagePayload>
 */
final class ProductPriceExternalDiscountSetMessagePayloadBuilder implements Builder
{
    public function __construct() {
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?DiscountedPriceBuilder|DiscountedPrice
     */
    protected $discounted;
    
    /**
     * @var ?bool
     */
    protected $staged;
    
    /**
     * @var ?int
     */
    protected $variantId;
    
    /**
     * @var ?string
     */
    protected $priceId;
    
    /**
     * @var ?string
     */
    protected $sku;
    
    /**
     * @var ?string
     */
    protected $variantKey;

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
     * @return DiscountedPrice|null
     */
    final public function getDiscounted()
    {
       return ($this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted);
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
     *
     * @return string|null
     */
    final public function getPriceId()
    {
       return $this->priceId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSku()
    {
       return $this->sku;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getVariantKey()
    {
       return $this->variantKey;
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
    final public function withDiscounted(?DiscountedPrice $discounted)
    {
        $this->discounted = $discounted;
        
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
    final public function withPriceId(?string $priceId)
    {
        $this->priceId = $priceId;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withSku(?string $sku)
    {
        $this->sku = $sku;
        
        return $this;
    }
    
    /**
     * @return $this
     */
    final public function withVariantKey(?string $variantKey)
    {
        $this->variantKey = $variantKey;
        
        return $this;
    }
    /**
     * @return $this
     */
    final public function withDiscountedBuilder(?DiscountedPriceBuilder $discounted)
    {
        $this->discounted = $discounted;
        
        return $this;
    }
    
    public function build(): ProductPriceExternalDiscountSetMessagePayload {
        return new ProductPriceExternalDiscountSetMessagePayloadModel(
            $this->type,
            ($this->discounted instanceof DiscountedPriceBuilder ? $this->discounted->build() : $this->discounted),
            $this->staged,
            $this->variantId,
            $this->priceId,
            $this->sku,
            $this->variantKey
        );
    }
    
    public static function of(): ProductPriceExternalDiscountSetMessagePayloadBuilder
    {
        return new self();
    }
}