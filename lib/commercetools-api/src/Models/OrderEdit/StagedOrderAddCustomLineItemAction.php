<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;

interface StagedOrderAddCustomLineItemAction extends StagedOrderUpdateAction
{
    
    const FIELD_MONEY = 'money';
    const FIELD_NAME = 'name';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_SLUG = 'slug';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_CUSTOM = 'custom';
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**
     *
     * @return Money|null
     */
    public function getMoney();
    
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
     * @return CustomFieldsDraft|null
     */
    public function getCustom();
    
    /**
     *
     * @return ExternalTaxRateDraft|null
     */
    public function getExternalTaxRate();
    public function setMoney(?Money $money): void;
    
    public function setName(?LocalizedString $name): void;
    
    public function setQuantity(?int $quantity): void;
    
    public function setSlug(?string $slug): void;
    
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;
    
    public function setCustom(?CustomFieldsDraft $custom): void;
    
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
}