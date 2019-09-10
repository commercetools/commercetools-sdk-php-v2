<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraftModel;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;

final class MyLineItemDraftModel extends JsonObjectModel implements MyLineItemDraft
{
    
    public function __construct(
        int $quantity = null,
        ItemShippingDetailsDraft $shippingDetails = null,
        string $productId = null,
        CustomFieldsDraft $custom = null,
        ChannelResourceIdentifier $supplyChannel = null,
        int $variantId = null,
        ChannelResourceIdentifier $distributionChannel = null
    ) {
        $this->quantity = $quantity;
        $this->shippingDetails = $shippingDetails;
        $this->productId = $productId;
        $this->custom = $custom;
        $this->supplyChannel = $supplyChannel;
        $this->variantId = $variantId;
        $this->distributionChannel = $distributionChannel;
        
    }

    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?ItemShippingDetailsDraft
     */
    protected $shippingDetails;
    
    /**
     * @var ?string
     */
    protected $productId;
    
    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $supplyChannel;
    
    /**
     * @var ?int
     */
    protected $variantId;
    
    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $distributionChannel;

    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       if (is_null($this->quantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(MyLineItemDraft::FIELD_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->quantity = (int)$data;
       }
       return $this->quantity;
    }
    
    /**
     *
     * @return ItemShippingDetailsDraft|null
     */
    final public function getShippingDetails()
    {
       if (is_null($this->shippingDetails)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(MyLineItemDraft::FIELD_SHIPPING_DETAILS);
           if (is_null($data)) {
               return null;
           }
           
           $this->shippingDetails = ItemShippingDetailsDraftModel::of($data);
       }
       return $this->shippingDetails;
    }
    
    /**
     *
     * @return string|null
     */
    final public function getProductId()
    {
       if (is_null($this->productId)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(MyLineItemDraft::FIELD_PRODUCT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->productId = (string)$data;
       }
       return $this->productId;
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(MyLineItemDraft::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsDraftModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    final public function getSupplyChannel()
    {
       if (is_null($this->supplyChannel)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(MyLineItemDraft::FIELD_SUPPLY_CHANNEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->supplyChannel = ChannelResourceIdentifierModel::of($data);
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
           $data = $this->raw(MyLineItemDraft::FIELD_VARIANT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->variantId = (int)$data;
       }
       return $this->variantId;
    }
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    final public function getDistributionChannel()
    {
       if (is_null($this->distributionChannel)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(MyLineItemDraft::FIELD_DISTRIBUTION_CHANNEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->distributionChannel = ChannelResourceIdentifierModel::of($data);
       }
       return $this->distributionChannel;
    }
    final public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
    
    final public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
    }
    
    final public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }
    
    final public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }
    
    final public function setVariantId(?int $variantId): void
    {
        $this->variantId = $variantId;
    }
    
    final public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }
    
}