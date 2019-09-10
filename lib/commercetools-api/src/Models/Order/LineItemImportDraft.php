<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Channel\ChannelResourceIdentifier;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\PriceDraft;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\Type\CustomFieldsDraft;

interface LineItemImportDraft extends JsonObject
{
    
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_NAME = 'name';
    const FIELD_VARIANT = 'variant';
    const FIELD_PRICE = 'price';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_STATE = 'state';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    const FIELD_TAX_RATE = 'taxRate';
    const FIELD_CUSTOM = 'custom';
    const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     *
     * @return string|null
     */
    public function getProductId();
    
    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    
    /**
     *
     * @return ProductVariantImportDraft|null
     */
    public function getVariant();
    
    /**
     *
     * @return PriceDraft|null
     */
    public function getPrice();
    
    /**
     *
     * @return int|null
     */
    public function getQuantity();
    
    /**
     *
     * @return ItemStateCollection|null
     */
    public function getState();
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    public function getSupplyChannel();
    
    /**
     *
     * @return ChannelResourceIdentifier|null
     */
    public function getDistributionChannel();
    
    /**
     *
     * @return TaxRate|null
     */
    public function getTaxRate();
    
    /**
     *
     * @return CustomFieldsDraft|null
     */
    public function getCustom();
    
    /**
     *
     * @return ItemShippingDetailsDraft|null
     */
    public function getShippingDetails();
    public function setProductId(?string $productId): void;
    
    public function setName(?LocalizedString $name): void;
    
    public function setVariant(?ProductVariantImportDraft $variant): void;
    
    public function setPrice(?PriceDraft $price): void;
    
    public function setQuantity(?int $quantity): void;
    
    public function setState(?ItemStateCollection $state): void;
    
    public function setSupplyChannel(?ChannelResourceIdentifier $supplyChannel): void;
    
    public function setDistributionChannel(?ChannelResourceIdentifier $distributionChannel): void;
    
    public function setTaxRate(?TaxRate $taxRate): void;
    
    public function setCustom(?CustomFieldsDraft $custom): void;
    
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}