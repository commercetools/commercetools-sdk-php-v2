<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Common\DiscountedPrice;
use Commercetools\Api\Models\Common\DiscountedPriceModel;

final class ProductPriceExternalDiscountSetMessagePayloadModel extends JsonObjectModel implements ProductPriceExternalDiscountSetMessagePayload
{
    const DISCRIMINATOR_VALUE = 'ProductPriceExternalDiscountSet';
    public function __construct(
        string $type = null,
        DiscountedPrice $discounted = null,
        bool $staged = null,
        int $variantId = null,
        string $priceId = null,
        string $sku = null,
        string $variantKey = null
    ) {
        $this->type = $type;
        $this->discounted = $discounted;
        $this->staged = $staged;
        $this->variantId = $variantId;
        $this->priceId = $priceId;
        $this->sku = $sku;
        $this->variantKey = $variantKey;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?DiscountedPrice
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
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MessagePayload::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return DiscountedPrice|null
     */
    final public function getDiscounted()
    {
       if (is_null($this->discounted)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(ProductPriceExternalDiscountSetMessagePayload::FIELD_DISCOUNTED);
           if (is_null($data)) {
               return null;
           }
           
           $this->discounted = DiscountedPriceModel::of($data);
       }
       return $this->discounted;
    }
    
    /**
     *
     * @return bool|null
     */
    final public function getStaged()
    {
       if (is_null($this->staged)) {
           /** @psalm-var ?bool $data */
           $data = $this->raw(ProductPriceExternalDiscountSetMessagePayload::FIELD_STAGED);
           if (is_null($data)) {
               return null;
           }
           $this->staged = (bool)$data;
       }
       return $this->staged;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVariantId()
    {
       if (is_null($this->variantId)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(ProductPriceExternalDiscountSetMessagePayload::FIELD_VARIANT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->variantId = (int)$data;
       }
       return $this->variantId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getPriceId()
    {
       if (is_null($this->priceId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductPriceExternalDiscountSetMessagePayload::FIELD_PRICE_ID);
           if (is_null($data)) {
               return null;
           }
           $this->priceId = (string)$data;
       }
       return $this->priceId;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getSku()
    {
       if (is_null($this->sku)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductPriceExternalDiscountSetMessagePayload::FIELD_SKU);
           if (is_null($data)) {
               return null;
           }
           $this->sku = (string)$data;
       }
       return $this->sku;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getVariantKey()
    {
       if (is_null($this->variantKey)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(ProductPriceExternalDiscountSetMessagePayload::FIELD_VARIANT_KEY);
           if (is_null($data)) {
               return null;
           }
           $this->variantKey = (string)$data;
       }
       return $this->variantKey;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setDiscounted(?DiscountedPrice $discounted): void
    {
        $this->discounted = $discounted;
    }
    
    final public function setStaged(?bool $staged): void
    {
        $this->staged = $staged;
    }
    
    final public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }
    
    final public function setPriceId(?string $priceId): void
    {
        $this->priceId = $priceId;
    }
    
    final public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }
    
    final public function setVariantKey(?string $variantKey): void
    {
        $this->variantKey = $variantKey;
    }
    
}