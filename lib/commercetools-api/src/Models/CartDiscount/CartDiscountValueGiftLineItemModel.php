<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Channel\ChannelReference;
use Commercetools\Api\Models\Channel\ChannelReferenceModel;
use Commercetools\Api\Models\Product\ProductReference;
use Commercetools\Api\Models\Product\ProductReferenceModel;

final class CartDiscountValueGiftLineItemModel extends JsonObjectModel implements CartDiscountValueGiftLineItem
{
    const DISCRIMINATOR_VALUE = 'giftLineItem';
    public function __construct(
        string $type = null,
        ProductReference $product = null,
        ChannelReference $supplyChannel = null,
        int $variantId = null,
        ChannelReference $distributionChannel = null
    ) {
        $this->type = $type;
        $this->product = $product;
        $this->supplyChannel = $supplyChannel;
        $this->variantId = $variantId;
        $this->distributionChannel = $distributionChannel;
        
    }

    /**
     * @var ?string
     */
    protected $type;
    
    /**
     * @var ?ProductReference
     */
    protected $product;
    
    /**
     * @var ?ChannelReference
     */
    protected $supplyChannel;
    
    /**
     * @var ?int
     */
    protected $variantId;
    
    /**
     * @var ?ChannelReference
     */
    protected $distributionChannel;

    /**
     *
     * @return string|null
     */
    final public function getType()
    {
       if (is_null($this->type)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(CartDiscountValue::FIELD_TYPE);
           if (is_null($data)) {
               return null;
           }
           $this->type = (string)$data;
       }
       return $this->type;
    }
    
    /**
     *
     * @return ProductReference|null
     */
    final public function getProduct()
    {
       if (is_null($this->product)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartDiscountValueGiftLineItem::FIELD_PRODUCT);
           if (is_null($data)) {
               return null;
           }
           
           $this->product = ProductReferenceModel::of($data);
       }
       return $this->product;
    }
    
    /**
     *
     * @return ChannelReference|null
     */
    final public function getSupplyChannel()
    {
       if (is_null($this->supplyChannel)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartDiscountValueGiftLineItem::FIELD_SUPPLY_CHANNEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->supplyChannel = ChannelReferenceModel::of($data);
       }
       return $this->supplyChannel;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getVariantId()
    {
       if (is_null($this->variantId)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(CartDiscountValueGiftLineItem::FIELD_VARIANT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->variantId = (int)$data;
       }
       return $this->variantId;
    }
    
    /**
     *
     * @return ChannelReference|null
     */
    final public function getDistributionChannel()
    {
       if (is_null($this->distributionChannel)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(CartDiscountValueGiftLineItem::FIELD_DISTRIBUTION_CHANNEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->distributionChannel = ChannelReferenceModel::of($data);
       }
       return $this->distributionChannel;
    }
    final public function setType(?string $type): void
    {
        $this->type = $type;
    }
    
    final public function setProduct(?ProductReference $product): void
    {
        $this->product = $product;
    }
    
    final public function setSupplyChannel(?ChannelReference $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }
    
    final public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }
    
    final public function setDistributionChannel(?ChannelReference $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }
    
}