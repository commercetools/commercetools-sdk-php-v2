<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderAddCustomLineItemAction extends StagedOrderUpdateAction
{
    public const FIELD_MONEY = 'money';
    public const FIELD_NAME = 'name';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_SLUG = 'slug';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    public const FIELD_PRICE_MODE = 'priceMode';

    /**
     * <p>Draft type that stores amounts only in cent precision for the specified currency.</p>
     *

     * @return null|Money
     */
    public function getMoney();

    /**
     * <p>JSON object where the keys are of type <a href="ctp:api:type:Locale">Locale</a>, and the values are the strings used for the corresponding language.</p>
     *

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
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to a <a href="ctp:api:type:TaxCategory">TaxCategory</a>.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * <p>The representation used when creating or updating a <a href="/../api/projects/types#list-of-customizable-data-types">customizable data type</a> with Custom Fields.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Controls calculation of taxed prices for Line Items, Custom Line Items, and Shipping Methods as explained in <a href="ctp:api:type:CartTaxCalculation">Cart tax calculation</a>.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * <ul>
     * <li>If <code>Standard</code>, Cart Discounts with a matching <a href="ctp:api:type:CartDiscountCustomLineItemsTarget">CartDiscountCustomLineItemsTarget</a>
     * are applied to the Custom Line Item.</li>
     * <li>If <code>External</code>, Cart Discounts are not considered on the Custom Line Item.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getPriceMode();

    /**
     * @param ?Money $money
     */
    public function setMoney(?Money $money): void;

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?string $slug
     */
    public function setSlug(?string $slug): void;

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     */
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRate
     */
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;

    /**
     * @param ?string $priceMode
     */
    public function setPriceMode(?string $priceMode): void;
}
