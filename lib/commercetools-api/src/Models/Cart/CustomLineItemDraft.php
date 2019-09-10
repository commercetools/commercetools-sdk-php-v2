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
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\JsonObject;

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
     * @return null|LocalizedString
     */
    public function getName();

    /**
     * @return null|int
     */
    public function getQuantity();

    /**
     * @return null|Money
     */
    public function getMoney();

    /**
     * @return null|string
     */
    public function getSlug();

    /**
     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * @return null|CustomFields
     */
    public function getCustom();

    /**
     * @return null|ItemShippingDetailsDraft
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
