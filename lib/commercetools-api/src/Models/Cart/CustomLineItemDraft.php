<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFields;

interface CustomLineItemDraft extends JsonObject
{
    
    const FIELD_NAME = 'name';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_MONEY = 'money';
    const FIELD_SLUG = 'slug';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    const FIELD_CUSTOM = 'custom';
    const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     *
     * @return LocalizedString|null
     */
    public function getName();
    
    /**
     *
     * @return int|null
     */
    public function getQuantity();
    
    /**
     *
     * @return Money|null
     */
    public function getMoney();
    
    /**
     *
     * @return string|null
     */
    public function getSlug();
    
    /**
     *
     * @return TaxCategoryResourceIdentifier|null
     */
    public function getTaxCategory();
    
    /**
     *
     * @return ExternalTaxRateDraft|null
     */
    public function getExternalTaxRate();
    
    /**
     *
     * @return CustomFields|null
     */
    public function getCustom();
    
    /**
     *
     * @return ItemShippingDetailsDraft|null
     */
    public function getShippingDetails();
    public function setName(?LocalizedString $name): void;
    
    public function setQuantity(?int $quantity): void;
    
    public function setMoney(?Money $money): void;
    
    public function setSlug(?string $slug): void;
    
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;
    
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
    
    public function setCustom(?CustomFields $custom): void;
    
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}