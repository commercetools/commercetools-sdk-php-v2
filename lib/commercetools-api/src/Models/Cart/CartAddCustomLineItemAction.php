<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;

interface CartAddCustomLineItemAction extends CartUpdateAction
{
    const FIELD_MONEY = 'money';
    const FIELD_NAME = 'name';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_SLUG = 'slug';
    const FIELD_TAX_CATEGORY = 'taxCategory';
    const FIELD_CUSTOM = 'custom';
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**
     * @return null|Money
     */
    public function getMoney();

    /**
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|string
     */
    public function getSlug();

    /**
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @return null|ExternalTaxRateDraft
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
