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
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomLineItemDraft extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_MONEY = 'money';
    public const FIELD_SLUG = 'slug';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';
    public const FIELD_CUSTOM = 'custom';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';
    public const FIELD_PRICE_MODE = 'priceMode';

    /**

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>The amount of a CustomLineItemin the cart.
     * Must be a positive integer.</p>
     *

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
     * <p>The given tax category will be used to select a tax rate when a cart has the TaxMode <code>Platform</code>.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

    /**
     * <p>An external tax rate can be set if the cart has the <code>External</code> TaxMode.</p>
     *

     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    /**
     * <p>The custom fields.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * <p>Container for custom line item specific address(es).</p>
     *

     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

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
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?Money $money
     */
    public function setMoney(?Money $money): void;

    /**
     * @param ?string $slug
     */
    public function setSlug(?string $slug): void;

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     */
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;

    /**
     * @param ?ExternalTaxRateDraft $externalTaxRate
     */
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;

    /**
     * @param ?string $priceMode
     */
    public function setPriceMode(?string $priceMode): void;
}
