<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\TaxCategory\TaxCategoryResourceIdentifier;
use Commercetools\Api\Models\TaxCategory\TaxRate;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomLineItemImportDraft extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_SLUG = 'slug';
    public const FIELD_QUANTITY = 'quantity';
    public const FIELD_MONEY = 'money';
    public const FIELD_TAX_RATE = 'taxRate';
    public const FIELD_TAX_CATEGORY = 'taxCategory';
    public const FIELD_PRICE_MODE = 'priceMode';
    public const FIELD_SHIPPING_DETAILS = 'shippingDetails';
    public const FIELD_STATE = 'state';
    public const FIELD_CUSTOM = 'custom';

    /**
     * <p>Name of the Custom Line Item.</p>
     *

     * @return null|LocalizedString
     */
    public function getName();

    /**
     * <p>User-defined identifier used in a deep-link URL for the Custom Line Item. This value should match the pattern <code>[a-zA-Z0-9_-]{2,256}</code>.</p>
     *

     * @return null|string
     */
    public function getSlug();

    /**
     * <p>The number of items in the Custom Line Item. Can be a negative value.</p>
     *

     * @return null|int
     */
    public function getQuantity();

    /**
     * <p>The cost of individual items in the Custom Line Item. The amount can be negative.</p>
     *

     * @return null|Money
     */
    public function getMoney();

    /**
     * <p>The tax rate used to calculate the <code>taxedPrice</code> of the Order.</p>
     *

     * @return null|TaxRate
     */
    public function getTaxRate();

    /**
     * <p>Include a value to associate a Tax Category with the Custom Line Item.</p>
     *

     * @return null|TaxCategoryResourceIdentifier
     */
    public function getTaxCategory();

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
     * <p>Container for Custom Line Item-specific addresses.</p>
     *

     * @return null|ItemShippingDetailsDraft
     */
    public function getShippingDetails();

    /**
     * <p>State of the Custom Line Items.</p>
     *

     * @return null|ItemStateCollection
     */
    public function getState();

    /**
     * <p>Custom Fields of the CustomLineItem.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void;

    /**
     * @param ?string $slug
     */
    public function setSlug(?string $slug): void;

    /**
     * @param ?int $quantity
     */
    public function setQuantity(?int $quantity): void;

    /**
     * @param ?Money $money
     */
    public function setMoney(?Money $money): void;

    /**
     * @param ?TaxRate $taxRate
     */
    public function setTaxRate(?TaxRate $taxRate): void;

    /**
     * @param ?TaxCategoryResourceIdentifier $taxCategory
     */
    public function setTaxCategory(?TaxCategoryResourceIdentifier $taxCategory): void;

    /**
     * @param ?string $priceMode
     */
    public function setPriceMode(?string $priceMode): void;

    /**
     * @param ?ItemShippingDetailsDraft $shippingDetails
     */
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;

    /**
     * @param ?ItemStateCollection $state
     */
    public function setState(?ItemStateCollection $state): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
