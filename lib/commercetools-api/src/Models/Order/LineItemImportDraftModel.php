<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraftModel;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifierModel;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\Common\PriceDraft;
use Commercetools\Api\Models\Common\PriceDraftModel;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\TaxCategory\TaxRateModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;

final class LineItemImportDraftModel extends JsonObjectModel implements LineItemImportDraft
{
    
    public function __construct(
        TaxRate $taxRate = null,
        int $quantity = null,
        ItemShippingDetailsDraft $shippingDetails = null,
        string $productId = null,
        PriceDraft $price = null,
        CustomFieldsDraft $custom = null,
        ProductVariantImportDraft $variant = null,
        LocalizedString $name = null,
        ChannelResourceIdentifier $supplyChannel = null,
        ItemStateCollection $state = null,
        ChannelResourceIdentifier $distributionChannel = null
    ) {
        $this->taxRate = $taxRate;
        $this->quantity = $quantity;
        $this->shippingDetails = $shippingDetails;
        $this->productId = $productId;
        $this->price = $price;
        $this->custom = $custom;
        $this->variant = $variant;
        $this->name = $name;
        $this->supplyChannel = $supplyChannel;
        $this->state = $state;
        $this->distributionChannel = $distributionChannel;
        
    }

    /**
     * @var ?TaxRate
     */
    protected $taxRate;
    
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
     * @var ?PriceDraft
     */
    protected $price;
    
    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;
    
    /**
     * @var ?ProductVariantImportDraft
     */
    protected $variant;
    
    /**
     * @var ?LocalizedString
     */
    protected $name;
    
    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $supplyChannel;
    
    /**
     * @var ?ItemStateCollection
     */
    protected $state;
    
    /**
     * @var ?ChannelResourceIdentifier
     */
    protected $distributionChannel;

    /**
     *
     * @return TaxRate|null
     */
    final public function getTaxRate()
    {
       if (is_null($this->taxRate)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItemImportDraft::FIELD_TAX_RATE);
           if (is_null($data)) {
               return null;
           }
           
           $this->taxRate = TaxRateModel::of($data);
       }
       return $this->taxRate;
    }
    
    /**
     *
     * @return int|null
     */
    final public function getQuantity()
    {
       if (is_null($this->quantity)) {
           /** @psalm-var ?int $data */
           $data = $this->raw(LineItemImportDraft::FIELD_QUANTITY);
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
           $data = $this->raw(LineItemImportDraft::FIELD_SHIPPING_DETAILS);
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
           $data = $this->raw(LineItemImportDraft::FIELD_PRODUCT_ID);
           if (is_null($data)) {
               return null;
           }
           $this->productId = (string)$data;
       }
       return $this->productId;
    }
    
    /**
     *
     * @return PriceDraft|null
     */
    final public function getPrice()
    {
       if (is_null($this->price)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItemImportDraft::FIELD_PRICE);
           if (is_null($data)) {
               return null;
           }
           
           $this->price = PriceDraftModel::of($data);
       }
       return $this->price;
    }
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    final public function getCustom()
    {
       if (is_null($this->custom)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItemImportDraft::FIELD_CUSTOM);
           if (is_null($data)) {
               return null;
           }
           
           $this->custom = CustomFieldsDraftModel::of($data);
       }
       return $this->custom;
    }
    
    /**
     *
     * @return ProductVariantImportDraft|null
     */
    final public function getVariant()
    {
       if (is_null($this->variant)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItemImportDraft::FIELD_VARIANT);
           if (is_null($data)) {
               return null;
           }
           
           $this->variant = ProductVariantImportDraftModel::of($data);
       }
       return $this->variant;
    }
    
    /**
     *
     * @return LocalizedString|null
     */
    final public function getName()
    {
       if (is_null($this->name)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItemImportDraft::FIELD_NAME);
           if (is_null($data)) {
               return null;
           }
           
           $this->name = LocalizedStringModel::of($data);
       }
       return $this->name;
    }
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    final public function getSupplyChannel()
    {
       if (is_null($this->supplyChannel)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItemImportDraft::FIELD_SUPPLY_CHANNEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->supplyChannel = ChannelResourceIdentifierModel::of($data);
       }
       return $this->supplyChannel;
    }
    
    /**
     *
     * @return ItemStateCollection|null
     */
    final public function getState()
    {
       if (is_null($this->state)) {
           /** @psalm-var ?array<int, stdClass> $data */
           $data = $this->raw(LineItemImportDraft::FIELD_STATE);
           if (is_null($data)) {
               return null;
           }
           $this->state = ItemStateCollection::fromArray($data);
       }
       return $this->state;
    }
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    final public function getDistributionChannel()
    {
       if (is_null($this->distributionChannel)) {
           /** @psalm-var stdClass|array<string, mixed>|null $data */
           $data = $this->raw(LineItemImportDraft::FIELD_DISTRIBUTION_CHANNEL);
           if (is_null($data)) {
               return null;
           }
           
           $this->distributionChannel = ChannelResourceIdentifierModel::of($data);
       }
       return $this->distributionChannel;
    }
    final public function setTaxRate(?TaxRate $taxRate): void
    {
        $this->taxRate = $taxRate;
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
    
    final public function setPrice(?PriceDraft $price): void
    {
        $this->price = $price;
    }
    
    final public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
    
    final public function setVariant(?ProductVariantImportDraft $variant): void
    {
        $this->variant = $variant;
    }
    
    final public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
    
    final public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void
    {
        $this->supplyChannel = $supplyChannel;
    }
    
    final public function setState(?ItemStateCollection $state): void
    {
        $this->state = $state;
    }
    
    final public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void
    {
        $this->distributionChannel = $distributionChannel;
    }
    
}