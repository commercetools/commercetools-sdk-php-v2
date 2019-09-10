<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Cart\ExternalLineItemTotalPrice;
use Commercetools\Api\Models\Cart\ExternalLineItemTotalPriceModel;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraftModel;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraftModel;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Order\StagedOrderUpdateActionModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;

final class StagedOrderAddLineItemActionModel extends JsonObjectModel implements StagedOrderAddLineItemAction
{
    const DISCRIMINATOR_VALUE = 'addLineItem';
    public function __construct(
        string $action = null,
        int $quantity = null,
        ExternalTaxRateDraft $externalTaxRate = null,
        ItemShippingDetailsDraft $shippingDetails = null,
        string $productId = null,
        ExternalLineItemTotalPrice $externalTotalPrice = null,
        CustomFieldsDraft $custom = null,
        ChannelResourceIdentifier $supplyChannel = null,
        int $variantId = null,
        string $sku = null,
        ChannelResourceIdentifier $distributionChannel = null,
        Money $externalPrice = null
    ) {
        $this->action = $action;
        $this->quantity = $quantity;
        $this->externalTaxRate = $externalTaxRate;
        $this->shippingDetails = $shippingDetails;
        $this->productId = $productId;
        $this->externalTotalPrice = $externalTotalPrice;
        $this->custom = $custom;
        $this->supplyChannel = $supplyChannel;
        $this->variantId = $variantId;
        $this->sku = $sku;
        $this->distributionChannel = $distributionChannel;
        $this->externalPrice = $externalPrice;
        
    }

    /**
     * @var ?string
     */
    protected $action;
    
    /**
     * @var ?int
     */
    protected $quantity;
    
    /**
     * @var ?ExternalTaxRateDraft
     */
    protected $externalTaxRate;
    
    /**
     * @var ?ItemShippingDetailsDraft
     */
    protected $shippingDetails;
    
    /**
     * @var ?string
     */
    protected $productId;
    
    /**
     * @var ?ExternalLineItemTotalPrice
     */
    protected $externalTotalPrice;
    
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
     * @var ?string
     */
    protected $sku;
    
    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $distributionChannel;
    
    /**
     * @var ?Money
     */
    protected $externalPrice;

    /**
     *
     * @return string|null
     */
    final public function getAction()
    {
       if (is_null($this->action)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
           if (is_null($data)) {
               return null;
           }
           $this->action = (string)$data;
       }
       return $this->action;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       if (is_null($this->quantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(StagedOrderAddLineItemAction::FIELD_QUANTITY);
           if (is_null($data)) {
               return null;
           }
           $this->quantity = (int)$data;
       }
       return $this->quantity;
    }
    
    /**
     *
     * @return ExternalTaxRateDraft|null
     */
    final public function getExternalTaxRate()
    {
       if (is_null($this->externalTaxRate)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(StagedOrderAddLineItemAction::FIELD_EXTERNAL_TAX_RATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->externalTaxRate = ExternalTaxRateDraftModel::of($data);
       }
       return $this->externalTaxRate;
    }
    
    /**
     *
     * @return ItemShippingDetailsDraft|null
     */
    final public function getShippingDetails()
    {
       if (is_null($this->shippingDetails)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(StagedOrderAddLineItemAction::FIELD_SHIPPING_DETAILS);
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
           $data = $this->raw(StagedOrderAddLineItemAction::FIELD_PRODUCT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->productId = (string)$data;
       }
       return $this->productId;
    }
    
    /**
     *
     * @return ExternalLineItemTotalPrice|null
     */
    final public function getExternalTotalPrice()
    {
       if (is_null($this->externalTotalPrice)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(StagedOrderAddLineItemAction::FIELD_EXTERNAL_TOTAL_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->externalTotalPrice = ExternalLineItemTotalPriceModel::of($data);
       }
       return $this->externalTotalPrice;
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(StagedOrderAddLineItemAction::FIELD_CUSTOM);
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
           $data = $this->raw(StagedOrderAddLineItemAction::FIELD_SUPPLY_CHANNEL);
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
           $data = $this->raw(StagedOrderAddLineItemAction::FIELD_VARIANT_ID);
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
    final public function getSku()
    {
       if (is_null($this->sku)) {
           /** @psalm-var ?string $data */
           $data = $this->raw(StagedOrderAddLineItemAction::FIELD_SKU);
           if (is_null($data)) {
               return null;
           }
           $this->sku = (string)$data;
       }
       return $this->sku;
    }
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    final public function getDistributionChannel()
    {
       if (is_null($this->distributionChannel)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(StagedOrderAddLineItemAction::FIELD_DISTRIBUTION_CHANNEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->distributionChannel = ChannelResourceIdentifierModel::of($data);
       }
       return $this->distributionChannel;
    }
    
    /**
     *
     * @return Money|null
     */
    final public function getExternalPrice()
    {
       if (is_null($this->externalPrice)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(StagedOrderAddLineItemAction::FIELD_EXTERNAL_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->externalPrice = MoneyModel::of($data);
       }
       return $this->externalPrice;
    }
    final public function setAction(?string $action): void
    {
        $this->action = $action;
    }
    
    final public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
    
    final public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void
    {
        $this->externalTaxRate = $externalTaxRate;
    }
    
    final public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void
    {
        $this->shippingDetails = $shippingDetails;
    }
    
    final public function setProductId(?string $productId): void
    {
        $this->productId = $productId;
    }
    
    final public function setExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice): void
    {
        $this->externalTotalPrice = $externalTotalPrice;
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
    
    final public function setSku(?string $sku): void
    {
        $this->sku = $sku;
    }
    
    final public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }
    
    final public function setExternalPrice(?Money $externalPrice): void
    {
        $this->externalPrice = $externalPrice;
    }
    
}